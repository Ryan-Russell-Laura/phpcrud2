<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        main {
            flex: 1;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f0f0f0; /* Cambia el color de fondo según tus preferencias */
            box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.1);
        }

        footer p {
            font-weight: bold;
            margin-bottom: 10px;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        footer li {
            display: inline-block;
            margin: 0 10px;
        }

        footer li::before {
            content: "\2022"; /* Agrega un punto como marcador antes de cada elemento de lista */
            margin-right: 5px;
        }
    </style>
    <!-- Aquí irían tus metaetiquetas, enlaces a estilos, etc. -->
</head>
<body>

    <!-- Contenido de tu página -->
    <main>
        <!-- Contenido principal aquí -->
    </main>

    <!-- Tus scripts -->
    <script src="js/jquery.3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <!-- Contenido del pie de página -->
    <footer>
        <p>Contribuciones:</p>
        <ul>
            <li>Jesus Edward Rocca Huillca</li>
            <li>Ryan Russell Laura Chambilla</li>
            <li>Juan Diego Huaman Ylla</li>
            <!-- Agrega más nombres según sea necesario -->
        </ul>
    </footer>

</body>
</html>
