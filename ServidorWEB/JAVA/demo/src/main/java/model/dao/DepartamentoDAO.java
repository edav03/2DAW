/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model.dao;

import jakarta.persistence.EntityManager;
import java.util.ArrayList;
import model.entidad.Departamento;
import model.util.HibernateUtil;

/**
 *
 * @author lliurex
 */
public class DepartamentoDAO {
    static public ArrayList<Departamento> getAllDepartments(){
        
        System.out.println("DEPARTAMENTODAO 000000");
        ArrayList<Departamento> departamentos = null;
        EntityManager entityManager = (EntityManager) HibernateUtil.getCurrentSessionFromJPA();
        try{
            
            String hql = "SELECT d FROM Departamento d";
            System.out.println("DEPARTAMENTODAO 1");
            entityManager.getTransaction().begin();
            System.out.println("DEPARTAMENTODAO 2");
            //Query queryDepartamento = (Query) entityManager.createQuery("SELECT d FROM Departamento d",Departamento.class);
            //List<Event> result = entityManager.createQuery( "from Event", Event.class ).getResultList();
            departamentos = (ArrayList<Departamento>) entityManager.createQuery( "from Departamento", Departamento.class).getResultList();
            
            System.out.println("DEPARTAMENTODAO 3");
       //     departamentos = (ArrayList<Departamento>) queryDepartamento.getResultList();
            System.out.println("DEPARTAMENTODAO 4");
            for ( Departamento event : departamentos ) {
                System.out.println( "DEpartamento (" + event.getId() + ") : " + event.getNombre() );
            }
            
            entityManager.getTransaction().commit();
            entityManager.close();
        }catch(Exception e){
            e.printStackTrace();
            entityManager.getTransaction().rollback();
            entityManager.close();
        }
        return departamentos;
    }
    
    public static boolean create(Departamento d) {
        EntityManager entityManager = (EntityManager) HibernateUtil.getCurrentSessionFromJPA();
        
        try {
            
           entityManager.getTransaction().begin();
           
           entityManager.persist(d);
           entityManager.getTransaction().commit();
           
           entityManager.close();
           return true;
           
        } catch (Exception e) {
            e.printStackTrace();
            entityManager.getTransaction().rollback();
            entityManager.close();
            
            return false;
        }
    }
    
    public static boolean update(Departamento d) {
        EntityManager entityManager = (EntityManager) HibernateUtil.getCurrentSessionFromJPA();
        
        try {
            
           entityManager.getTransaction().begin();
           
           entityManager.persist(d);
           entityManager.getTransaction().commit();
           
           entityManager.close();
           return true;
           
        } catch (Exception e) {
            e.printStackTrace();
            entityManager.getTransaction().rollback();
            entityManager.close();
            
            return false;
        }
    }
    
    public static Departamento getById(Integer id){
        Departamento _d = null;
        EntityManager entityManager = (EntityManager) HibernateUtil.getCurrentSessionFromJPA();

        try{
            entityManager.getTransaction().begin();
            _d = (Departamento) entityManager.createQuery( "FROM Departamento WHERE id=:ident", Departamento.class).setParameter("ident", id).getSingleResult();

            entityManager.getTransaction().commit();
            entityManager.close();
        }catch(Exception e){
            e.printStackTrace();
            entityManager.getTransaction().rollback();
            entityManager.close();
        }
        return _d;
    }
    
}
