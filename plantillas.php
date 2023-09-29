<!-- FECHA -->
<h1>Hola: <?php echo $_SESSION['usuario'] ?> </h1>
        <?php 
          date_default_timezone_set('America/Caracas');
          $i = null;
          $h = null;
          if (date('i')>30) {
            $h = date('h');
            $i = date('i')-30;
          }else{
            $h = date('h')-1;
            $i = date('i')+30;
          }
          if ($i>9) {
            echo date('d-m-Y, '.$h.':'.$i.'a');
          }else{
            echo date('d-m-Y, '.$h.':'.$i.'a');
          }
        ?>







<!-- SWEETALERT -->
<?php 
#mensaje comun
    Swal.fire('Any fool can use a computer')

#pregunta
    Swal.fire(
      'The Internet?',
      'That thing is still around?',
      'question'
  )

#bien
    Swal.fire(
          'Good job!',
          'You clicked the button!',
          'success'
          )

#error
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      footer: '<a href="">Why do I have this issue?</a>'
  })

#seguro?
    Swal.fire({
      title: 'Do you want to save the changes?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Save',
      denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Saved!', '', 'success')
      } else if (result.isDenied) {
        Swal.fire('Changes are not saved', '', 'info')
      }
    })

#mensaje temporal
  Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
  })

#animado
  Swal.fire({
      title: 'Custom animation with Animate.css',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
    }
})

#advertencia
  Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
      )
    }
})



#tres opciones
    const steps = ['1', '2', '3']
    const Queue = Swal.mixin({
      progressSteps: steps,
      confirmButtonText: 'Next >',
  // optional classes to avoid backdrop blinking between steps
      showClass: { backdrop: 'swal2-noanimation' },
      hideClass: { backdrop: 'swal2-noanimation' }
    })

    await Queue.fire({
      title: 'Uno',
      currentProgressStep: 0,
  // optional class to show fade-in backdrop animation which was disabled in Queue mixin
      showClass: { backdrop: 'swal2-noanimation' },
    })
    await Queue.fire({
      title: 'Dos',
      currentProgressStep: 1
    })
    await Queue.fire({
      title: 'Tres',
      currentProgressStep: 2,
      confirmButtonText: 'OK',
  // optional class to show fade-out backdrop animation which was disabled in Queue mixin
      showClass: { backdrop: 'swal2-noanimation' },
    })






    text
const ipAPI = '//api.ipify.org?format=json'

const inputValue = fetch(ipAPI)
  .then(response => response.json())
  .then(data => data.ip)

const { value: ipAddress } = await Swal.fire({
  title: 'Enter your IP address',
  input: 'text',
  inputLabel: 'Your IP address',
  inputValue: inputValue,
  showCancelButton: true,
  inputValidator: (value) => {
    if (!value) {
      return 'You need to write something!'
    }
  }
})

if (ipAddress) {
  Swal.fire(`Your IP address is ${ipAddress}`)
}







multiple inputs
const { value: formValues } = await Swal.fire({
  title: 'Multiple inputs',
  html:
    '<input id="swal-input1" class="swal2-input">' +
    '<input id="swal-input2" class="swal2-input">',
  focusConfirm: false,
  preConfirm: () => {
    return [
      document.getElementById('swal-input1').value,
      document.getElementById('swal-input2').value
    ]
  }
})

if (formValues) {
  Swal.fire(JSON.stringify(formValues))
}

    ?>









<!-- ALERTIFY -->
if(!alertify.myAlert){
  //define a new dialog
  alertify.dialog('myAlert',function(){
    return{
      main:function(message){
        this.message = message;
      },
      setup:function(){
          return { 
            buttons:[{text: "cool!", key:27/*Esc*/}],
            focus: { element:0 }
          };
      },
      prepare:function(){
        this.setContent(this.message);
      }
  }});
}
//launch it.
alertify.myAlert("Browser dialogs made easy!");




alertify
  .alert("This is an alert dialog.", function(){
    alertify.message('OK');
  });




  alertify.confirm("This is a confirm dialog.",
  function(){
    alertify.success('Ok');
  },
  function(){
    alertify.error('Cancel');
  });



  alertify.prompt("This is a prompt dialog.", "Default value",
  function(evt, value ){
    alertify.success('Ok: ' + value);
  },
  function(){
    alertify.error('Cancel');
  })
  ;




    // success notification
  // Shorthand for:
  // alertify.notify( message, 'success', [wait, callback]);
  alertify.success('Success message');




   // error notification
  // Shorthand for:
  // alertify.notify( message, 'error', [wait, callback]);
  alertify.error('Error message');



   // warning notification
  // Shorthand for:
  // alertify.notify( message, 'warning', [wait, callback]);
  alertify.warning('Warning message');




   // default notification
  // Shorthand for:
  // alertify.notify( message, [type, wait, callback]);
  alertify.message('Normal message');










<!-- MODAL -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>




<!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">
  ...
</div>






<!-- SPINNER -->
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>












<!--   ICONOS -->
<i class="fa-solid fa-gears"></i> engranajes
<i class="fa-solid fa-chart-simple"></i> barras de porcentaje
<i class="fa-solid fa-clipboard-list"></i> lista
<i class="fa-solid fa-clipboard-question"></i> lista ?
<i class="fa-solid fa-clipboard"></i> lita vacia 
<i class="fa-regular fa-clipboard"></i> lista mas vacia 
<i class="fa-solid fa-clipboard-user"></i> lista con user 
<i class="fa-solid fa-bars"></i> barras 
<i class="fa-solid fa-ellipsis"></i> elipsis horizontal
<i class="fa-solid fa-ellipsis-vertical"></i> elipsis vertical
<i class="fa-solid fa-magnifying-glass-chart"></i> lupa con barras de porcentaje 
<i class="fa-solid fa-user"></i> user 
<i class="fa-regular fa-user"></i> user 
<i class="fa-solid fa-check"></i> check 
<i class="fa-solid fa-phone"></i> phone
<i class="fa-solid fa-arrow-up"></i> flecha
<i class="fa-solid fa-file"></i> file
<i class="fa-regular fa-file"></i> file
<i class="fa-solid fa-pen"></i> pen 
<i class="fa-solid fa-rotate-right"></i> recargar
<i class="fa-solid fa-print"></i> impresora 
<i class="fa-solid fa-address-book"></i> book user 
<i class="fa-regular fa-address-book"></i>
<i class="fa-solid fa-house-user"></i> home user 
<i class="fa-solid fa-phone-volume"></i> phone
<i class="fa-solid fa-chalkboard-user"></i> user prof
<i class="fa-solid fa-users"></i> users 
<i class="fa-solid fa-user-tie"></i> user corbata
<i class="fa-solid fa-user-clock"></i> user hora 
<i class="fa-solid fa-user-check"></i> user check 
<i class="fa-solid fa-building-columns"></i> edificio de columnas
<i class="fa-solid fa-address-card"></i> card 
<i class="fa-solid fa-id-card-clip"></i> card user 
<i class="fa-solid fa-id-card"></i> 
<i class="fa-regular fa-id-card"></i>
<i class="fa-solid fa-trash-can-arrow-up"></i> papelera vaciar
<i class="fa-solid fa-ban"></i> nulo 
<i class="fa-solid fa-file-pen"></i> 
<i class="fa-regular fa-circle-check"></i> check
<i class="fa-solid fa-eraser"></i>remove
<i class="fa-solid fa-calendar-xmark"></i>
<i class="fa-solid fa-bars"></i>otras








<!-- CARDS -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



<div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>




<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>




<div class="card" style="width: 18rem;">
  <div class="card-header">
    Featured
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
</div>





<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-footer">
    Card footer
  </div>
</div>







<!-- CLOCKPICKER -->
  <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
    <input type="text" class="form-control" value="13:14">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
<script type="text/javascript">
$('.clockpicker').clockpicker({
    autoclose: true,
    twelvehour: true
  });
</script>






<!-- BOTON DESPLEGABLE -->
<div class="col">
  <div class="dropend">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Boton
    </button>
    <ul class="dropdown-menu">
      <li><h6 class="dropdown-header">Dropdown header</h6></li>
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>
</div>