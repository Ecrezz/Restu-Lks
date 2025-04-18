<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Games - Gaming Portal</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index">Gaming Portal</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
         <li><a href="discover-games" class="nav-link px-2 text-white">Discover Games</a></li>
         <li><a href="manage-games" class="nav-link px-2 text-white">Manage Games</a></li>
         <li><a href="profile" class="nav-link px-2 text-white">User Profile</a></li>
         <li class="nav-item">
           <a class="nav-link active bg-dark" href="#">Welcome, Player1</a>
         </li> 
         <li class="nav-item">
          <a class="btn bg-black text-primary ms-4" href="dashboard">Back To Dashboard</a>
        </li> 
       </ul> 
      </div>
    </nav>

    <main>

      <div class="hero py-5 bg-light">
         <div class="container">
            <a href="manage-games-form" class="btn btn-primary">
               Add Game
            </a>
         </div>
      </div>
      
      <div class="list-form py-5">
        <div class="container">
           <h6 class="mb-3">List Games</h6>

           <table class="table table-striped">
               <thead>
                   <tr>
                       <th width="100">Thumbnail</th>
                       <th width="200">Title</th>
                       <th width="500">Description</th>
                       <th width="180">Action</th>
                   </tr>
               </thead>
               <tbody>
                 <tr>
                     <td>                      <img src="thumbnail.png" alt="Demo Game 1 Logo" style="width: 100%">  </td>
                     <td>Demo Game 1</td>
                     <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, numquam repellendus perspiciatis cupiditate veritatis porro quod eveniet animi perferendis molestias debitis temporibus, asperiores iusto.                    </td>
                     <td>
                      <a href="detail-games" class="btn btn-sm btn-primary">Detail</a>
                      <a href="manage-games-form-update" class="btn btn-sm btn-secondary">Update</a>
                      <a href="#" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>                      <img src="thumbnail.png" alt="Demo Game 1 Logo" style="width: 100%">  </td>
                     <td>Demo Game 2</td>
                     <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, numquam repellendus perspiciatis cupiditate veritatis porro quod eveniet animi perferendis molestias debitis temporibus, asperiores iusto.                    </td>
                     <td>
                      <a href="detail-games" class="btn btn-sm btn-primary">Detail</a>
                      <a href="manage-games-form-update" class="btn btn-sm btn-secondary">Update</a>
                      <a href="#" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
                 <tr>
                     <td>                      <img src="thumbnail.png" alt="Demo Game 1 Logo" style="width: 100%">  </td>
                     <td>Demo Game 3</td>
                     <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, numquam repellendus perspiciatis cupiditate veritatis porro quod eveniet animi perferendis molestias debitis temporibus, asperiores iusto.                    </td>
                     <td>
                      <a href="detail-games" class="btn btn-sm btn-primary">Detail</a>
                      <a href="manage-games-form-update" class="btn btn-sm btn-secondary">Update</a>
                      <a href="#" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
               </tbody>
           </table>

        </div>
     </div>
      
    </main>
   

    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.js"></script>
  </body>
</html>