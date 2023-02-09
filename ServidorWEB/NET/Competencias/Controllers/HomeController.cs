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
            Carrera cr = new Carrera();
            return View(cr.GetAll());
        }

        public IActionResult Alta()
        {
            return View();
        }

        [HttpPost]
        public IActionResult Alta(IFormCollection collection)
        {

            Carrera car = new Carrera();
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

        public IActionResult Editar(int IdParticipantes)
        {
            Carrera car = new Carrera();
            Participantes part = car.GetId(IdParticipantes);
            return View(part);
        }

        [HttpPost]
        public IActionResult Editar(IFormCollection collection)
        {
            Carrera car = new Carrera();
            Participantes part = new Participantes();

            part.IdParticipantes = int.Parse(collection["IdParticipantes"].ToString());
            part.NumCarrera = int.Parse(collection["NumCarrera"].ToString());
            part.Dorsal = int.Parse(collection["Dorsal"].ToString());
            part.Apellidos = collection["Apellidos"].ToString();
            part.Nombre = collection["Nombre"].ToString();
            part.Dni = collection["Dni"].ToString();
            part.Club = collection["Club"].ToString();

            car.Modificar(part); ;

            return RedirectToAction("Index");
        }

        public IActionResult Delete(int IdParticipantes)
        {
            Carrera car = new Carrera();
            car.Borrar(IdParticipantes);

            return RedirectToAction("Index");
        }

        public IActionResult Importar()
        {
            return View();
        }

        public IActionResult Participantes()
        {
            return View();
        }

        public IActionResult Privacy()
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