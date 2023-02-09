using Microsoft.EntityFrameworkCore.Storage;
using System.Data;
using System.Data.SqlClient;

namespace Competencias.Models
{
    public class MantenimientoCompetencias
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

        public int AltaCarrera(Carrera race)
        {

            Conectar();
            SqlCommand cmd = new SqlCommand(
                        "insert into carreras (IdCarrera, NumCarrera, DescripcionCarrera, FechaCarrera, Distanciaenmetros, HoraInicio) " +
                        "values(@IdCarrera,@NumCarrera,@DescripcionCarrera,@FechaCarrera,@Distanciaenmetros, @HoraInicio)", con);

            cmd.Parameters.Add("@IdCarrera", System.Data.SqlDbType.Int);
            cmd.Parameters.Add("@NumCarrera", System.Data.SqlDbType.Int);
            cmd.Parameters.Add("@DescripcionCarrera", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@FechaCarrera", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@Distanciaenmetros", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@HoraInicio", System.Data.SqlDbType.VarChar);

            cmd.Parameters["@IdCarrera"].Value = race.IdCarrera.ToString();
            cmd.Parameters["@NumCarrera"].Value = race.NumCarrera.ToString();
            cmd.Parameters["@DescripcionCarrera"].Value = race.DescripcionCarrera.ToString();
            cmd.Parameters["@FechaCarrera"].Value = race.FechaCarrera.ToString();
            cmd.Parameters["@Distanciaenmetros"].Value = race.Distanciaenmetros.ToString();
            cmd.Parameters["@HoraInicio"].Value = race.HoraInicio.ToString();

            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public int AltaChips(CodigoChips chp)
        {

            Conectar();
            SqlCommand cmd = new SqlCommand(
                        "insert into codigochips (Codigo, Dorsal) " +
                        "values(@Codigo, @Dorsal)", con);

            cmd.Parameters.Add("@Codigo", System.Data.SqlDbType.VarChar);
            cmd.Parameters.Add("@Dorsal", System.Data.SqlDbType.Int);

            cmd.Parameters["@Codigo"].Value = chp.Codigo.ToString();
            cmd.Parameters["@Dorsal"].Value = chp.Dorsal.ToString();

            con.Open();
            int i = cmd.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public List<Participantes> GetAllParticipantes()
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

        public List<CodigoChips> GetAllChips()
        {
            Conectar();
            List<CodigoChips> AllChips = new List<CodigoChips>();
            string sql = "select * from codigochips";
            SqlCommand comando = new SqlCommand(sql, con);
            con.Open();
            SqlDataReader registros = comando.ExecuteReader();
            while (registros.Read())
            {

                CodigoChips chp = new CodigoChips();
                chp.Codigo = registros["Codigo"].ToString();
                chp.Dorsal = int.Parse(registros["Dorsal"].ToString());

                AllChips.Add(chp);
            }
            return AllChips;
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

        public Carrera GetIdCarrera(int cod)
        {
            Conectar();
            string sql = "select * from carreras where IdCarrera=@cod";
            SqlCommand comando = new SqlCommand(sql, con);
            comando.Parameters.Add("@cod", SqlDbType.Int);
            comando.Parameters["@cod"].Value = cod;
            con.Open();
            SqlDataReader registros = comando.ExecuteReader();
            Carrera race = new Carrera();
            if (registros.Read())
            {
                race.IdCarrera = int.Parse(registros["IdCarrera"].ToString());
                race.DescripcionCarrera = registros["DescripcionCarrera"].ToString();
                race.FechaCarrera = registros["FechaCarrera"].ToString();
                race.Distanciaenmetros = registros["Distanciaenmetros"].ToString();
                race.HoraInicio = registros["HoraInicio"].ToString();
            }
            con.Close();
            return race;
        }

        public int Modificar(Participantes part)
        {
            Conectar();
            string sql = @"update participantes set 
                            NumCarrera=@NumCarrera,
                            Dorsal=@Dorsal,
                            Apellidos=@Apellidos,
                            Nombre=@Nombre,
                            Dni=@Dni,
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

        public int ModificarCarrera(Carrera race)
        {
            Conectar();
            string sql = @"update carreras set 
                            IdCarrera=@IdCarrera,
                            NumCarrera=@NumCarrera,
                            DescripcionCarrera=@DescripcionCarrera,
                            FechaCarrera=@FechaCarrera,
                            Distanciaenmetros=@Distanciaenmetros,
                            HoraInicio=@HoraInicio
            where IdCarrera=@IdCarrera";

            SqlCommand comando = new SqlCommand(sql, con);
            comando.Parameters.Add("@IdCarrera", SqlDbType.Int);
            comando.Parameters.Add("@NumCarrera", SqlDbType.Int);
            comando.Parameters.Add("@DescripcionCarrera", SqlDbType.VarChar);
            comando.Parameters.Add("@FechaCarrera", SqlDbType.VarChar);
            comando.Parameters.Add("@Distanciaenmetros", SqlDbType.VarChar);
            comando.Parameters.Add("@HoraInicio", SqlDbType.VarChar);
            comando.Parameters["@IdCarrera"].Value = race.IdCarrera;
            comando.Parameters["@NumCarrera"].Value = race.NumCarrera;
            comando.Parameters["@DescripcionCarrera"].Value = race.DescripcionCarrera;
            comando.Parameters["@FechaCarrera"].Value = race.FechaCarrera;
            comando.Parameters["@Distanciaenmetros"].Value = race.Distanciaenmetros;
            comando.Parameters["@HoraInicio"].Value = race.HoraInicio;

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

        public int BorrarCarrera(int cod)
        {
            Conectar();
            string sql = "delete from carreras where IdCarrera=@cod";
            SqlCommand sentencia = new SqlCommand(sql, con);

            sentencia.Parameters.Add("@cod", SqlDbType.Int);
            sentencia.Parameters["@cod"].Value = cod;

            con.Open();
            int i = sentencia.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public int BorrarChips(string cod)
        {
            Conectar();
            string sql = "delete from codigochips where Codigo=@cod";
            SqlCommand sentencia = new SqlCommand(sql, con);

            sentencia.Parameters.Add("@cod", SqlDbType.VarChar);
            sentencia.Parameters["@cod"].Value = cod;

            con.Open();
            int i = sentencia.ExecuteNonQuery();
            con.Close();
            return i;
        }

        public List<Carrera> GetAllCarrera()
        {
            Conectar();
            List<Carrera> Allcarrera = new List<Carrera>();
            string sql = "select * from carreras";
            SqlCommand comando = new SqlCommand(sql, con);
            con.Open();
            SqlDataReader registros = comando.ExecuteReader();
            while (registros.Read())
            {

                Carrera race = new Carrera();
                race.IdCarrera = int.Parse(registros["IdCarrera"].ToString());
                race.NumCarrera = int.Parse(registros["NumCarrera"].ToString());
                race.DescripcionCarrera = registros["DescripcionCarrera"].ToString();
                race.FechaCarrera = registros["FechaCarrera"].ToString();
                race.Distanciaenmetros = registros["Distanciaenmetros"].ToString();
                race.HoraInicio = registros["HoraInicio"].ToString();


                Allcarrera.Add(race);
            }
            return Allcarrera;
        }

    }

}