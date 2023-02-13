<%-- 
    Document   : formulario
    Created on : Feb 13, 2023, 5:12:06 PM
    Author     : edison
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<jsp:useBean id="usuario" scope="request" class="entidad.infoUsuario" />
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FORMULARIO</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <% if (request.getParameter("nombre") == null ||
            request.getParameter("nombre").equals(""))
        { %>
            <form action="formulario.jsp" method="POST">
                Nombre: <input type="text" name="nombre" value="" /><br>
                Email: <input type="text" name="email" value="" /><br>
                <input type="submit" value="Enviar" />
            </form>
        <% }else { %>
            <%
                String nombre, mail;
                nombre = request.getParameter("nombre");
                mail = request.getParameter("email");
            %>
            <b>Usted indicó la siguiente información: </b>
            <br>Nombre: <%= nombre %>
            <br>Email: <%= mail %>
            <jsp:setProperty name="usuario" property="name" value="<%= nombre%>" />
            <jsp:setProperty name="usuario" property="email" value="<%= mail%>" />
            <jsp:forward page="/mostrar_javaBean.jsp"></jsp:forward>
        <% } %>
    </body>
</html