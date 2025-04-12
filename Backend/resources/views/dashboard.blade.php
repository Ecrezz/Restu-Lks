<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Gaming Portal</title>
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
           <a class="btn bg-white text-primary ms-4" href="#">Welcome, Player1</a>
         </li> 
       </ul> 
      </div>
    </nav>

    <main>

      <div class="hero py-5 bg-light">
         <div class="container text-center">
          <h1 class="mb-0 mt-0">Dashboard</h1>
         </div>
      </div>

      <div class="list-form py-5">
         <div class="container">
          <h5 class="alert alert-info">
            Welcome, Administrator. Don't forget to sign out when you are finished using this page
          </h5>
         </div>
      </div>
      
    </main>
   

    <script src="../js/bootstrap.js"></script>
    <script src="../js/popper.js"></script>
  </body>
</html>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!doctype html>
                <html lang="en">
                  <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Administrators - Administrator Portal</title>
                    <link rel="stylesheet" href="../css/bootstrap.css">
                    <link rel="stylesheet" href="../css/style.css">
                  </head>
                  <body>
                   
                   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
                      <div class="container">
                        <a class="navbar-brand" href="index">Administrator Portal</a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          
                         <li><a href="admins" class="nav-link px-2 text-white">List Admins</a></li>
                         <li><a href="users" class="nav-link px-2 text-white">List Users</a></li>
                         <li class="nav-item">
                           <a class="btn bg-white text-primary ms-4" href="#">Welcome, Administrator</a>
                         </li> 
                       </ul> 
                      </div>
                    </nav>
                
                    <main>
                
                      <div class="list-form py-5">
                         <div class="container">
                            <h6 class="mb-3">List Admin Users</h6>
                
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Created at</th>
                                        <th>Last login</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>admin1</td>
                                      <td>2024-04-05 20:55:40</td>
                                      <td>2024-04-05 20:55:40</td>
                                  </tr>
                                  <tr>
                                      <td>admin2</td>
                                      <td>2024-04-13 20:55:40</td>
                                      <td>2024-04-28 20:55:40</td>
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
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!doctype html>
                <html lang="en">
                  <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Detail Form - Formify</title>
                    <link rel="stylesheet" href="./css/bootstrap.css">
                    <link rel="stylesheet" href="./css/style.css">
                  </head>
                  <body>
                   
                   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
                      <div class="container">
                        <a class="navbar-brand" href="manage-forms">Formify</a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                           <a class="nav-link active" href="#">Administrator</a>
                         </li> 
                         <li class="nav-item">
                            <a class="nav-link active" href="create-form">New Form</a>
                          </li>
                       </ul> 
                      </div>
                    </nav>
                
                    <main>
                      <div class="hero py-5 bg-light">
                         <div class="container text-center">  
                            <h2 class="mb-2">
                               Biodata - Web Tech Members
                            </h2>  
                            <div class="text-muted mb-4">
                               To save web tech members biodata
                            </div> 
                            <div>
                               <div>
                                  <small>For user domains</small>
                               </div>
                               <small><span class="text-primary">webtech.id, webtech.org</span></small>
                            </div> 
                         </div>
                      </div>
                
                      <div class="py-5">
                         <div class="container"> 
                
                            <div class="row justify-content-center ">
                               <div class="col-lg-5 col-md-6"> 
                                  <div class="input-group mb-5">
                                     <input type="text" class="form-control form-link" readonly value="http://localhost:8080/forms/biodata"/>
                                     <a href="submit-form" class="btn btn-primary">Copy</a>
                                  </div>
                
                                  <ul class="nav nav-tabs mb-2 justify-content-center">
                                     <li class="nav-item">
                                        <a class="nav-link active" href="detail-form">Questions</a>
                                     </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="responses">Responses</a>
                                     </li> 
                                  </ul>
                               </div>
                             </div>
                
                            <div class="row justify-content-center">
                               <div class="col-lg-5 col-md-6"> 
                
                                  <div class="question-item  card card-default my-4">
                                     <div class="card-body">
                                        <div class="form-group my-3">
                                           <input type="text" placeholder="Question" class="form-control" name="name" value="Name" disabled required />
                                        </div> 
                
                                        <div class="form-group my-3">
                                           <select name="choice_type" class="form-select" disabled>
                                              <option>Choice Type</option>
                                              <option selected value="short answer">Short Answer</option>
                                              <option value="paragraph">Paragraph</option>
                                              <option value="multiple choice">Multiple Choice</option>
                                              <option value="dropdown">Dropdown</option>
                                              <option value="checkboxes">Checkboxes</option>
                                           </select>
                                        </div>
                                        <div class="form-check form-switch" aria-colspan="my-3">
                                           <input class="form-check-input" type="checkbox" role="switch" id="required" disabled checked required />
                                           <label class="form-check-label" for="required">Required</label>
                                         </div>
                                         <div class="mt-3">
                                           <button type="submit" class="btn btn-outline-danger">Remove</button>
                                         </div> 
                                     </div>
                                  </div> 
                
                                  <div class="question-item card card-default my-4">
                                     <div class="card-body">
                                        <div class="form-group my-3">
                                           <input type="text" placeholder="Question" class="form-control" name="name" value="Address" disabled required />
                                        </div> 
                
                                        <div class="form-group my-3">
                                           <select name="choice_type" class="form-select" disabled>
                                              <option>Choice Type</option>
                                              <option value="short answer">Short Answer</option>
                                              <option selected value="paragraph">Paragraph</option>
                                              <option value="multiple choice">Multiple Choice</option>
                                              <option value="dropdown">Dropdown</option>
                                              <option value="checkboxes">Checkboxes</option>
                                           </select>
                                        </div>
                                        <div class="form-check form-switch" aria-colspan="my-3">
                                           <input class="form-check-input" type="checkbox" role="switch" id="required" />
                                           <label class="form-check-label" for="required">Required</label>
                                         </div>
                                         <div class="mt-3">
                                           <button type="submit" class="btn btn-outline-danger">Remove</button>
                                         </div> 
                                     </div>
                                  </div>
                
                                  <div class="question-item card card-default my-4">
                                     <div class="card-body">
                                        <div class="form-group my-3">
                                           <input type="text" placeholder="Question" class="form-control" name="name" value="Sex" disabled required />
                                        </div> 
                
                                        <div class="form-group my-3">
                                           <select name="choice_type" class="form-select" disabled>
                                              <option>Choice Type</option>
                                              <option value="short answer">Short Answer</option>
                                              <option value="paragraph">Paragraph</option>
                                              <option selected value="multiple choice">Multiple Choice</option>
                                              <option value="dropdown">Dropdown</option>
                                              <option value="checkboxes">Checkboxes</option>
                                           </select>
                                        </div>
                                        <div class="form-group my-3">
                                           <textarea placeholder="Choices" class="form-control" name="choices" rows="4" disabled>Male,Female,Others</textarea>
                                           <div class="form-text">
                                              Separate choices using comma ",".
                                            </div>
                                        </div> 
                                        <div class="form-check form-switch" aria-colspan="my-3">
                                           <input class="form-check-input" type="checkbox" role="switch" id="required" checked disabled />
                                           <label class="form-check-label" for="required">Required</label>
                                         </div>
                                         <div class="mt-3">
                                           <button type="submit" class="btn btn-outline-danger">Remove</button>
                                         </div> 
                                     </div>
                                  </div>
                
                                  <div class="question-item card card-default my-4">
                                     <div class="card-body">
                                        <div class="form-group my-3">
                                           <input type="text" placeholder="Question" class="form-control" name="name" value="Born Date" disabled required />
                                        </div> 
                
                                        <div class="form-group my-3">
                                           <select name="chocie_type" class="form-select" disabled>
                                              <option>Choice Type</option>
                                              <option value="short answer">Short Answer</option>
                                              <option value="paragraph">Paragraph</option>
                                              <option selected value="date">Date</option>
                                              <option value="multiple choice">Multiple Choice</option>
                                              <option value="dropdown">Dropdown</option>
                                              <option value="checkboxes">Checkboxes</option>
                                           </select>
                                        </div>
                                        <div class="form-check form-switch" aria-colspan="my-3">
                                           <input class="form-check-input" type="checkbox" role="switch" id="required" checked disabled />
                                           <label class="form-check-label" for="required">Required</label>
                                         </div>
                                        <div class="mt-3">
                                           <button type="submit" class="btn btn-outline-danger">Remove</button>
                                         </div>  
                                     </div>
                                  </div>
                
                                  <div class="question-item card card-default my-4">
                                     <div class="card-body">
                                        <div class="form-group my-3">
                                           <input type="text" placeholder="Question" class="form-control" name="name" value="Hobbies" disabled required />
                                        </div> 
                
                                        <div class="form-group my-3">
                                           <select name="choice_type" class="form-select" disabled>
                                              <option>Choice Type</option>
                                              <option value="short answer">Short Answer</option>
                                              <option value="paragraph">Paragraph</option>
                                              <option value="multiple choice">Multiple Choice</option>
                                              <option value="dropdown">Dropdown</option>
                                              <option selected value="checkboxes">Checkboxes</option>
                                           </select>
                                        </div>
                                        <div class="form-group my-3">
                                           <textarea placeholder="Choices" class="form-control" name="choices" rows="4" disabled>Football,Guitar,Coding,Watching,Traveling</textarea>
                                           <div class="form-text">
                                              Separate choices using comma ",".
                                            </div>
                                        </div>
                                        <div class="form-check form-switch" aria-colspan="my-3">
                                           <input class="form-check-input" type="checkbox" role="switch" id="required" disabled />
                                           <label class="form-check-label" for="required">Required</label>
                                         </div>
                                        <div class="mt-3">
                                           <button type="submit" class="btn btn-outline-danger">Remove</button>
                                         </div>  
                                     </div>
                                  </div>
                
                                  <div class="question-item card card-default my-4">
                                     <div class="card-body">
                                        <form>
                                           <div class="form-group my-3">
                                              <input type="text" placeholder="Question" class="form-control" name="name" value="" required />
                                           </div> 
                   
                                           <div class="form-group my-3">
                                              <select name="choice_type" class="form-select">
                                                 <option selected>Choice Type</option>
                                                 <option value="short answer">Short Answer</option>
                                                 <option value="paragraph">Paragraph</option>
                                                 <option value="date">Date</option>
                                                 <option value="multiple choice">Multiple Choice</option>
                                                 <option value="dropdown">Dropdown</option>
                                                 <option value="checkboxes">Checkboxes</option>
                                              </select>
                                           </div>
                                           <div class="form-check form-switch" aria-colspan="my-3">
                                              <input class="form-check-input" type="checkbox" role="switch" id="required" />
                                              <label class="form-check-label" for="required">Required</label>
                                            </div>
                                           <div class="mt-3">
                                              <button type="submit" class="btn btn-outline-primary">Save</button>
                                            </div>  
                                        </form>
                                     </div>
                                  </div> 
                
                               </div>  
                            </div>   
                            
                         </div>
                      </div>
                    </main>
                   
                
                    <script src="./js/bootstrap.js"></script>
                    <script src="./js/popper.js"></script> 
                  </body>
                </html>
</div>
</div>
</div>




</x-app-layout>
