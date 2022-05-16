<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRM</title>

    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/morph/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h1 class="h4">Agregar cliente</h1>
              <form action="" id="client-form">
                <label for="name">Nombre:</label>
                <input
                  class="form-control mb-3"
                  type="text"
                  placeholder="Nombre del cliente"
                  id="client-name"
                  required
                />
                <label for="addres">Dirección:</label>
                <input
                  class="form-control mb-3"
                  type="text"
                  placeholder="Dirección del cliente"
                  id="client-adress"
                  required
                />
                <label for="phone">Telefono:</label>
                <input
                  class="form-control mb-3"
                  type="text"
                  placeholder="Telefono del cliente"
                  id="client-phone"
                  required
                />
                <label for="email">Correo:</label>
                <input
                  class="form-control mb-3"
                  type="email"
                  placeholder="Correo del cliente"
                  id="client-email"
                  required
                />
                <label for="coments">Comentarios:</label>
                <textarea
                  class="form-control mb-3"
                  id="client-description"
                  rows="3"
                  placeholder="Comentarios"
                  required
                ></textarea>
                <button id="btn-client-save" class="btn">Guardar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-6" id="client-container"></div>
      </div>
    </div>

    <script type="module" src="./index.js"></script>
  </body>
</html>