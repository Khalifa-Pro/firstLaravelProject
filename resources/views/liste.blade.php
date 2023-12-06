<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
      <title>Liste des apprenants</title>
   </head>
   <body style="background-color: gray;">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   <div class="container" style="margin-top: 100px;">
         <div class="row w-100 mx-0">
            <div class="col-md-12">
                  <div class="card">
                     <div class="card-header" s>
                        <h4>Liste des apprenants</h2>
                     </div>
                     <div class="card-body">
                        <table class="table table-bordered table-striped">
                           <thead class="thead-dark">
                              <tr>
                                 <th scope="col">Prénom</th>
                                 <th scope="col">Nom</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($liste as $apprenant)
                              <tr>
                                 <td> {{$apprenant->prenom}} </td>
                                 <td> {{$apprenant->nom}} </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </body>
</html>