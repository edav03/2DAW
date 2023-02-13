<%-- 
    Document   : mostrar_javaBean
    Created on : Feb 13, 2023, 5:49:33 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<jsp:useBean id="usuario" scope="request" class="entidad.infoUsuario" />
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MOSTRAR JAVA BEAN</title>
    </head>
    <body>
        <h1>MOSTRAR JAVA BEAN!</h1>
        Nombre: <jsp:getProperty name="usuario" property="name" />
        <br>
        Email: <jsp:getProperty name="usuario" property="email" />
    </body>
</html>
