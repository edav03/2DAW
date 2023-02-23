package com.empresa.controller;

import jakarta.persistence.EntityManager;
import jakarta.persistence.EntityManagerFactory;
import jakarta.persistence.Persistence;
import jakarta.persistence.Query;
import jakarta.servlet.http.HttpServletRequest;
import java.util.ArrayList;
import java.util.List;
import model.dao.DepartamentoDAO;
import model.entidad.Departamento;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class HelloWorldController {

    @GetMapping("/index")
    public ModelAndView showUserList() {

        ArrayList<Departamento> lista = new ArrayList<Departamento>();

        Departamento e = new Departamento();
        e.setNombre("Contabilidad");
        lista.add(e);
        Departamento e1 = new Departamento();
        e1.setNombre("Informática");
        lista.add(e1);
        ModelAndView mv = new ModelAndView("index");
        // model.addAttribute("departamentos", DepartamentoDAO.getAllDepartments());
        mv.addObject("departamentos", lista);
        return mv;
    }

    /*@RequestMapping("/")
public String hello() 
{
return "index";
}*/
    @RequestMapping("/home")
    public ModelAndView index() {

    
    
        ArrayList<Departamento> departamentos = (ArrayList<Departamento>) DepartamentoDAO.getAllDepartments();
        ModelAndView mv = new ModelAndView("index");
        try {
            //  List<Departamento>  lista = DepartamentoDAO.getAllDepartments();

            mv.addObject("departamentos", departamentos);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return mv;
    }

    @RequestMapping("/alta")
    public ModelAndView departamento() {
        ModelAndView mv = new ModelAndView("CrearDepartamento");
        return mv;
    }

    @RequestMapping(value = "/formCrear.htm")
    public ModelAndView formCrear() {
        ModelAndView mv = new ModelAndView("CrearParticipante");
        return mv;
    }

    @RequestMapping(value = "/adduser", method = RequestMethod.POST)
    public ModelAndView crear(HttpServletRequest request,
            @RequestParam("nombre") String nombre
    ) {
        ModelAndView mv = new ModelAndView("CrearDepartamento");
        Departamento _d = new Departamento();
        _d.setNombre(nombre);
        DepartamentoDAO.create(_d);
        return mv;
    }
    
    //@PostMapping("/adduser", method = RequestMethod.post)
//    public String addUser(@Valid Departamento _d, BindingResult result, Model model) {
//        if (result.hasErrors()) {
//            return "add-user";
//        }
//        
//        userRepository.save(user);
//        return "redirect:/index";
//    }

    @RequestMapping("/hello")
    public String hello2() {
        return "Hello2 redenia javaTpoint";
    }

}
