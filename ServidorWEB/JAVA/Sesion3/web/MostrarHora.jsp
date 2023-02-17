<%-- 
    Document   : MostrarHora
    Created on : Feb 16, 2023, 11:47:19 AM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.*"%>
<%@page isErrorPage="true"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MOSTRAR HORA</title>
    </head>
    <body>
        <%@page errorPage="navbar.html"%>
        <h1>HORA ACTUAL</h1>
        <p>
            <% Calendar cal = Calendar.getInstance();
                out.println(
                        cal.get(Calendar.HOUR_OF_DAY) +
                        " : " + cal.get(Calendar.MINUTE) +
                        " : " + cal.get(Calendar.SECOND)
                );
            %>
        </p>
    </body>
</html>
