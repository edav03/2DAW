using Microsoft.EntityFrameworkCore.Storage;
using System.Data;
using System.Data.SqlClient;

namespace Competencias.Models
{
    public class Carrera
    {
        private SqlConnection con;
        private void Conectar()
        {
            var builder = new ConfigurationBuilder()
            .SetBasePath(Directory.GetCurrentDirectory())
           .AddJsonFile("appSettings.json", optional: true, reloadOnChange: true);
            IConfiguration _configuration = builder.Build();
            string constr = _configuration.GetConnectionString("DefaultConnection");
            //Console.WriteLine(myConnectionString1);

            con = new SqlConnection(constr);
        }

        public int Alta(Participantes part)
        {

            Conectar();
            SqlCommand cmd = new SqlCommand(
                        "insert into participantes (IdParticipantes, NumCarrera, Dorsal, Apellidos, Nombre, Dni, Club) " +
                        "values(@IdParticipantes,@NumCarrera,@Dorsal,@Apellidos,@Nombre,@Dni,@Club)", con);

            cmd.Parameters.Add("@IdParticipantes", System.Data.SqlDbType.Int);
            cmd.Parameters.Add("@NumCarrera", System.Data.SqlDbType.Int);
            cmd.Parameters.Add("@Dorsal", System.Data.SqlDbType.Int);
            cmd.Parameters.Add("@Apellidos", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@Nombre", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@Dni", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@Club", System.Data.SqlDbType.VarChar);

            cmd.Parameters["@IdParticipantes"].Value = part.IdParticipantes.ToString();
            cmd.Parameters["@NumCarrera"].Value = part.NumCarrera.ToString();
            cmd.Parameters["@Dorsal"].Value = part.Dorsal.ToString();
            cmd.Parameters["@Apellidos"].Value = part.Apellidos.ToString();
            cmd.Parameters["@Nombre"].Value = part.Nombre.ToString();
            cmd.Parameters["@Dni"].Value = part.Dni.ToString();
            cmd.Parameters["@Club"].Value = part.Club.ToString();

            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public List<Participantes> GetAll()
        {
            Conectar();
            List<Participantes> Allparticipantes = new List<Participantes>();
            string sql = "select * from participantes";
            SqlCommand comando = new SqlCommand(sql, con);
            con.Open();
            SqlDataReader registros = comando.ExecuteReader();
            while (registros.Read())
            {

                Participantes part = new Participantes();
                part.IdParticipantes = int.Parse(registros["IdParticipantes"].ToString());
                part.Nombre = registros["Nombre"].ToString();
                part.Apellidos = registros["Apellidos"].ToString();
                part.Dorsal = int.Parse(registros["Dorsal"].ToString());
                part.Club = registros["Club"].ToString();


                Allparticipantes.Add(part);
            }
            return Allparticipantes;
        }

        public Participantes GetId(int IdParticipantes)
        {
            Conectar();
            string sql = "select IdParticipantes, NumCarrera, Dorsal, Apellidos, Nombre, Dni, Club from participantes where IdParticipantes=@IdParticipantes";
            SqlCommand comando = new SqlCommand(sql, con);
            comando.Parameters.Add("@IdParticipantes", SqlDbType.Int);
            comando.Parameters["@IdParticipantes"].Value = IdParticipantes;
            con.Open();
            SqlDataReader registros = comando.ExecuteReader();
            Participantes part = new Participantes();
            if (registros.Read())
            {
                part.IdParticipantes = int.Parse(registros["IdParticipantes"].ToString());
                part.NumCarrera = int.Parse(registros["NumCarrera"].ToString());
                part.Dorsal = int.Parse(registros["Dorsal"].ToString());
                part.Apellidos = registros["Apellidos"].ToString();
                part.Nombre = registros["Nombre"].ToString();
                part.Dni = registros["Dni"].ToString();
                part.Club = registros["Club"].ToString();
            }
            con.Close();
            return part;
        }

        public int Modificar(Participantes part)
        {
            Conectar();
            string sql = @"update participantes set 
                            NumCarrera=@NumCarrera,
                            Dorsal=@Dorsal
                            Apellidos=@Apellidos
                            Nombre=@Nombre
                            Dni=@Dni
                            Club=@Club
            where IdParticipantes=@IdParticipantes";

            SqlCommand comando = new SqlCommand(sql, con);
            comando.Parameters.Add("@IdParticipantes", SqlDbType.Int);
            comando.Parameters.Add("@NumCarrera", SqlDbType.Int);
            comando.Parameters.Add("@Dorsal", SqlDbType.Int);
            comando.Parameters.Add("@Apellidos", SqlDbType.VarChar);
            comando.Parameters.Add("@Nombre", SqlDbType.VarChar);
            comando.Parameters.Add("@Dni", SqlDbType.VarChar);
            comando.Parameters.Add("@Club", SqlDbType.VarChar);
            comando.Parameters["@IdParticipantes"].Value = part.IdParticipantes;
            comando.Parameters["@NumCarrera"].Value = part.NumCarrera;
            comando.Parameters["@Dorsal"].Value = part.Dorsal;
            comando.Parameters["@Apellidos"].Value = part.Apellidos;
            comando.Parameters["@Nombre"].Value = part.Nombre;
            comando.Parameters["@Dni"].Value = part.Dni;
            comando.Parameters["@Club"].Value = part.Club;

            con.Open();
            int i = comando.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public int Borrar(int IdParticipantes)
        {

            Conectar();

            string sql = "delete from participantes where IdParticipantes=@IdParticipantes";

            SqlCommand sentencia = new SqlCommand(sql, con);

            sentencia.Parameters.Add("@IdParticipantes", SqlDbType.Int);
            sentencia.Parameters["@IdParticipantes"].Value = IdParticipantes;

            con.Open();
            int i = sentencia.ExecuteNonQuery();
            con.Close();
            return i;
        }

    }

}