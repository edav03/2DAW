/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model.util;

import jakarta.persistence.EntityManager;
import jakarta.persistence.EntityManagerFactory;
import jakarta.persistence.Persistence;
import jakarta.websocket.Session;
import org.hibernate.SessionFactory;

/**
 *
 * @author edison
 */
public class HibernateUtil {
    public static SessionFactory getCurrentSessionFromJPA() {
        EntityManagerFactory emf = Persistence.createEntityManagerFactory("default");
        EntityManager entityManager = emf.createEntityManager();
        Session session = entityManager.unwrap(org.hibernate.Session.class);
        SessionFactory factory = session.getSessionFactory();
        return factory;
    }
}
