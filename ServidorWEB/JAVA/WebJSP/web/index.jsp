<%-- 
    Document   : index
    Created on : Feb 13, 2023, 4:37:33 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.*" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        contenido dinamico mediante SCRIPTS JSP
        <ul>
            <li><b>Expresiones JSP: </b>
                Fecha actual: <%= new Date()  %>
            </li>
            <li><b>Scriplet JSP: </b>
                <%
                    Calendar cal = Calendar.getInstance();
                    out.println("La fecha es: " +
                                cal.get(Calendar.DATE) + "/ " +
                                (cal.get(Calendar.MONTH) + 1) + "/ " +
                                cal.get(Calendar.YEAR)
                                );
                %>
            </li>
            <li><b>Declaracion + Expresión: </b>
                <%! private int accessCount = 0; %>
                Accesos a la pagina:
                <%= ++accessCount %>
            </li>
        </ul>
        
        La IP de tu ordenador es: <%= request.getRemoteHost() %>
        <br>
        El nombre del Servidor es: <%= request.getServerName() %>
        <br>
        El puerto del Servidor es: <%= request.getServerPort() %>
        <br>
        La IP del Servidor es: <%= request.getRemoteAddr() %>
        <br>
        El protocolo que estas usando es: <%= request.getProtocol() %>
    </body>
</html>
