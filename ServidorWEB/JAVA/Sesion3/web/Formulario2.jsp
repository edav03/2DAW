<%-- 
    Document   : Formulario2
    Created on : Feb 16, 2023, 7:01:48 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="cine" scope="request" class="Entidad.InfoUsuario" />
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FORMULARIO2</title>
    </head>
    <body>
        <h1>Usted indicó la siguiente información: </h1>
        <BR><b>Pelicula: </b> <jsp:getProperty name="cine" property="pelicula" />
        <BR><b>Alquiler: </b> <jsp:getProperty name="cine" property="alquiler" />
        <BR><b>Edad: </b> <jsp:getProperty name="cine" property="edad" />
        <BR><b>Pago: </b> <jsp:getProperty name="cine" property="pago" />
        <BR><b>Extra: </b> <jsp:getProperty name="cine" property="extras" />
    </body>
</html>
