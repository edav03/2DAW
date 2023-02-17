<%-- 
    Document   : Formulario1
    Created on : Feb 16, 2023, 6:33:50 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<jsp:useBean id="cine" scope="request" class="Entidad.InfoUsuario" />

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FORMULARIO</title>
    </head>
    <body>
        <%if(
        (request.getParameter("pelicula")== null &&
        request.getParameter("alquiler")== null &&
        request.getParameter("edad")== null &&
        request.getParameter("pago")== null)
        ||
        (request.getParameter("pelicula").equals("") &&
        request.getParameter("alquiler").equals("") &&
        request.getParameter("edad").equals("") &&
        request.getParameter("pago").equals(""))
        ){
        %>
        <form method="POST" action="Formulario1.jsp">
            Nombre Pelicula: <input type="text" name="pelicula"><BR>
            Dias de alquiler: <input type="number" name="alquiler" min="1" value="1"><BR>
            Edad del cliente: <input type="number" name="edad"><BR>
            <!--Forma de pago: <input type="text" name="pago"><BR>-->
            <label>Forma de pago: </label>
            <select name="pago">
                <option value="VISA" selected>VISA</option>
                <option value="AL CONTADO">AL CONTADO</option>
                <option value="METALICO">METALICO</option>
            </select>
            <BR>
            Especificaciones extra: <input type="text" name="extra"><BR>
            <input type="submit" value="Enviar">
        </form>
        <%} else{%>
        <% String pelicula, pago, extra; %>
        <% int alquiler, edad;%>
        <%
            pelicula = request.getParameter("pelicula");
            alquiler = Integer.parseInt(request.getParameter("alquiler"));
            edad = Integer.parseInt(request.getParameter("edad"));
            pago = request.getParameter("pago");
            extra = request.getParameter("extra");
        %>
        <jsp:setProperty name="cine" property="pelicula" value="<%=pelicula%>" />
        <jsp:setProperty name="cine" property="alquiler" value="<%=alquiler%>" />
        <jsp:setProperty name="cine" property="edad" value="<%=edad%>" />
        <jsp:setProperty name="cine" property="pago" value="<%=pago%>" />
        <jsp:setProperty name="cine" property="extras" value="<%=extra%>" />
        <jsp:forward page="/Formulario2.jsp"></jsp:forward>
        <%}%>
    </body>
</html>
