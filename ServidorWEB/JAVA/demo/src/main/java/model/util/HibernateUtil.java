/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model.util;

import jakarta.persistence.EntityManager;
import jakarta.persistence.EntityManagerFactory;
import jakarta.persistence.Persistence;

/**
 *
 * @author lliurex
 */
public class HibernateUtil {
    public static EntityManager getCurrentSessionFromJPA() {
        
        EntityManagerFactory sessionFactory = Persistence.createEntityManagerFactory( "default" );
        EntityManager entityManager = sessionFactory.createEntityManager();
        return entityManager;
       
    }
}
