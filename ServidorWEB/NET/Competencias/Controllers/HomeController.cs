using Competencias.Models;
using Microsoft.AspNetCore.Mvc;
using System.Diagnostics;


namespace Competencias.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            MantenimientoCompetencias cr = new MantenimientoCompetencias();
            return View(cr.GetAllParticipantes());
        }

        public IActionResult Alta()
        {
            return View();
        }

        [HttpPost]
        public IActionResult Alta(IFormCollection collection)
        {

            MantenimientoCompetencias car = new MantenimientoCompetencias();
            Participantes part = new Participantes();

            part.IdParticipantes = int.Parse(collection["IdParticipantes"].ToString());
            part.NumCarrera = int.Parse(collection["NumCarrera"].ToString());
            part.Dorsal = int.Parse(collection["Dorsal"].ToString());
            part.Apellidos = collection["Apellidos"].ToString();
            part.Nombre = collection["Nombre"].ToString();
            part.Dni = collection["Dni"].ToString();
            part.Club = collection["Club"].ToString();

            car.Alta(part);
            return RedirectToAction("Index");
        }

        public IActionResult AltaCarrera() 
        { 
            return View(); 
        }

        [HttpPost]
        public IActionResult AltaCarrera(IFormCollection collection)
        {

            MantenimientoCompetencias car = new MantenimientoCompetencias();
            Carrera race = new Carrera();

            race.IdCarrera = int.Parse(collection["IdCarrera"].ToString());
            race.NumCarrera = int.Parse(collection["NumCarrera"].ToString());
            race.DescripcionCarrera = collection["DescripcionCarrera"].ToString();
            race.FechaCarrera = collection["FechaCarrera"].ToString();
            race.Distanciaenmetros = collection["Distanciaenmetros"].ToString();
            race.HoraInicio = collection["HoraInicio"].ToString();

            car.AltaCarrera(race);
            return RedirectToAction("Carreras");
        }

        public IActionResult Editar(int IdParticipantes)
        {
            MantenimientoCompetencias car = new MantenimientoCompetencias();
            Participantes part = car.GetId(IdParticipantes);
            return View(part);
        }

        [HttpPost]
        public IActionResult Editar(IFormCollection collection)
        {
            int IdParticipantes = int.Parse(collection["IdParticipantes"].ToString());
            int NumCarrera = int.Parse(collection["NumCarrera"].ToString());
            int Dorsal = int.Parse(collection["Dorsal"].ToString());
            string Apellidos = collection["Apellidos"].ToString();
            string Nombre = collection["Nombre"].ToString();
            string Dni = collection["Dni"].ToString();
            string Club = collection["Club"].ToString();

            Participantes part = new Participantes();
            part.IdParticipantes = IdParticipantes;
            part.NumCarrera = NumCarrera;
            part.Dorsal = Dorsal;
            part.Apellidos = Apellidos;
            part.Nombre = Nombre;
            part.Dni = Dni;
            part.Club = Club;
           
            MantenimientoCompetencias car = new MantenimientoCompetencias();
            car.Modificar(part);

            return RedirectToAction("Index");
        }

        public IActionResult EditarCarrera(int cod) 
        {
            MantenimientoCompetencias car = new MantenimientoCompetencias();
            Carrera race = car.GetIdCarrera(cod);

            return View(race); 
        }

        [HttpPost]
        public IActionResult EditarCarrera(IFormCollection collection)
        {
            int IdCarrera = int.Parse(collection["IdCarrera"].ToString());
            string DescripcionCarrera = collection["DescripcionCarrera"].ToString();
            string FechaCarrera = collection["FechaCarrera"].ToString();
            string Distanciaenmetros = collection["Distanciaenmetros"].ToString();
            string HoraInicio = collection["HoraInicio"].ToString();

            Carrera race = new Carrera();
            race.IdCarrera = IdCarrera;
            race.DescripcionCarrera = DescripcionCarrera;
            race.FechaCarrera = FechaCarrera;
            race.Distanciaenmetros = Distanciaenmetros;
            race.HoraInicio = HoraInicio;

            MantenimientoCompetencias car = new MantenimientoCompetencias();
            car.ModificarCarrera(race);

            return RedirectToAction("Carreras");
        }

            public IActionResult Delete(int IdParticipantes)
        {
            MantenimientoCompetencias car = new MantenimientoCompetencias();
            car.Borrar(IdParticipantes);

            return RedirectToAction("Index");
        }

        public IActionResult DeleteCarrera(int cod)
        {
            MantenimientoCompetencias car = new MantenimientoCompetencias();
            car.BorrarCarrera(cod);

            return RedirectToAction("Carreras");
        }

        public IActionResult Importar()
        {
            return View();
        }

        public IActionResult Carreras()
        {
            MantenimientoCompetencias cr = new MantenimientoCompetencias();
            return View(cr.GetAllCarrera());
        }

        public IActionResult CodigoChips()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}