class SliceCatal extends HTMLElement {
    //Aqui iria el codigo
    constructor() {
        super();
    }
    connectedCallback() {
        let shawRoot = this.attachShadow({ mode: 'open' });
        shawRoot.innerHTML = `
    <style>
    *{
        padding: 0;
        margin: 0;
        font-family:Arial, Helvetica, sans-serif;
    }
    body{
        background-color: rgb(245, 245, 245);
    }
    
    .imagen{
        border: solid 2px black;
        margin: 15px;
        text-align: center;
    }
    
    .cuadro{
        display: inline-block;
        list-style: none;
        border-radius: 15px;
        background: white;
        border:3px solid rgb(141, 80, 160);
        margin: 15px;
    }
    .catalogo{
        border: 2px solid black;
        text-align: center;  
        padding-left: 10%;
        padding-right: 10%;
        margin: 20px;
        height: 100%;
        right: 20px;
    }
    
    
    .cuadro h4 {
        margin-bottom: 10px;
    }
    .cimagen{
        height: 260px;
        width: 250px;
        justify-content: space-evenly;
        align-items: center;
        border-radius: 13px;
    }
    .carrito{
        background: rgb(183, 121, 207);
        text-decoration: none;
        height: 40px;
        width: 200px;
        border-radius: 20px;
        margin: 5px;
        color: rgb(14, 34, 99);
        font-weight: bolder;
        cursor: pointer; 
    }
        
      </style>
     
    <div class="catalogo">
        <h2>Catálogo</h2>
        <div class="cuadro">
            <img src="Img/portada1.jpg" class="cimagen">
            <div class="info">
                <h4>Doctor Strange 3D</h4>
                <p>$6,50</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
        <div class="cuadro">
            <img src="Img/portada2" class="cimagen">
            <div class="info">
                <h4>Scary movie 2D</h4>
                <p>$4,50</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
        <div class="cuadro">
            <img src="Img/portada3.jpg" class="cimagen">
            <div class="info">
                <h4>Thor and love</h4>
                <p>$7,00</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
        <div class="cuadro">
            <img src="Img/portada4.jpg" class="cimagen">
            <div class="info">
                <h4>Spiderman: <br> Sin regreso a casa 2D</h4>
                <p>$4,50</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
        <div class="cuadro">
            <img src="Img/portada5.jpg" class="cimagen">
            <div class="info">
                <h4>Ton Gun Maverick 3D</h4>
                <p>$6,50</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
        <div class="cuadro">
            <img src="Img/portada6.jpg" class="cimagen">
            <div class="info">
                <h4>Sonic 2 3D</h4>
                <p>$5,50</p>
            </div>
            <input type="button" value="COMPRAR" class="carrito">
        </div>
    </div>
      `;


      
    }
}

window.customElements.define('bbem-slice-catal', SliceCatal);



class SliceComSoon extends HTMLElement{

    constructor(){
        super();
    }

    connectedCallback() {
        let shawRoot = this.attachShadow({ mode: 'open' });
        shawRoot.innerHTML = `
        <style>
    *{
        padding: 0;
        margin: 0;
        font-family:Arial, Helvetica, sans-serif;
    }
    body{
        background-color: rgb(245, 245, 245);
    }
    
    .imagen{
        border: solid 2px black;
        margin: 15px;
        text-align: center;
    }
    
    .cuadro{
        display: inline-block;
        list-style: none;
        border-radius: 15px;
        background: white;
        border:3px solid rgb(141, 80, 160);
        margin: 15px;
    }
    .catalogo{
        border: 2px solid black;
        text-align: center;  
        padding-left: 10%;
        padding-right: 10%;
        margin: 20px;
        height: 100%;
        right: 20px;
    }
    
    
    .cuadro h4 {
        margin-bottom: 10px;
    }
    .cimagen{
        height: 260px;
        width: 250px;
        justify-content: space-evenly;
        align-items: center;
        border-radius: 13px;
    }
    .carrito{
        background: rgb(183, 121, 207);
        text-decoration: none;
        height: 40px;
        width: 200px;
        border-radius: 20px;
        margin: 5px;
        color: rgb(14, 34, 99);
        font-weight: bolder;
        cursor: pointer; 
    }
    .info {
        padding: 10px 20px;
    }
    .info p{
        font-size: 30px;
        color: rgb(31, 163, 31);
        font-family: Arial, Helvetica, sans-serif;
    }
    
      </style>


        <div class="catalogo">
        <h2>Estrenos</h2>
        <div class="cuadro">
            <img src="Img/proximo1.jpg" class="cimagen">
            <div class="info">
                <h4>Asesino Sin Memoria</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo2.jpg" class="cimagen">
            <div class="info">
                <h4>Gemelo Siniestro</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo3.jpg" class="cimagen">
            <div class="info">
                <h4>Lightyear</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo4.jpg" class="cimagen">
            <div class="info">
                <h4>Dog: Un Viaje Salvaje</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo5.jpg" class="cimagen">
            <div class="info">
                <h4>El Teléfono Negro</h4>
                <p>Proximamente</p>
            </div>
        </div>
    </div>`;

    

    }

}

window.customElements.define("bbem-slice-comsoon",SliceComSoon);

/*
<div class="catalogo">
        <h2>Estrenos</h2>
        <div class="cuadro">
            <img src="Img/proximo1.jpg" class="cimagen">
            <div class="info">
                <h4>Asesino Sin Memoria</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo2.jpg" class="cimagen">
            <div class="info">
                <h4>Gemelo Siniestro</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo3.jpg" class="cimagen">
            <div class="info">
                <h4>Lightyear</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo4.jpg" class="cimagen">
            <div class="info">
                <h4>Dog: Un Viaje Salvaje</h4>
                <p>Proximamente</p>
            </div>
        </div>
        <div class="cuadro">
            <img src="Img/proximo5.jpg" class="cimagen">
            <div class="info">
                <h4>El Teléfono Negro</h4>
                <p>Proximamente</p>
            </div>
        </div>
    </div>

*/
 