class Footer extends HTMLElement {
    //Aqui iria el codigo del elemento
    constructor() {
      super();
    }
    connectedCallback() {
      let shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.innerHTML = `
      <style>
      footer {
        background: rgb(78, 7, 78);
        text-align: center;
        font-size: larger;
        padding-top: 2%;
        margin: 20px;
        color: blanchedalmond;
        padding-bottom: 2%;
        bottom: 0;
    }
      .contenedor-footer {
  
        display: flex;
        width: 90%;
        justify-content: space-evenly;
        margin: auto;
        padding-bottom: 50px;
        border-bottom: 1px solid #ccc;
    
    
    }
    
    
    .content-foo {
        text-align: center;
    
    }
    
    ul {
        list-style: none;
    }
    
    .content-foo h4 {
        color: #fff;
        border-bottom: 3px solid #747373;
        padding-bottom: 5px;
        margin-bottom: 10px;
    
    }
    
    .content-foo p {
        color: #ccc;
    
    
    }
    </style>
  
      <footer id="foo">
      <a id="Contacto" name="#Contactos"></a>
      <div class="contenedor-footer">
  
          <div class="content-foo">
              <h4>Integrantes</h4>
              <ul>
                  <li> Bryan Noboa</li>
                  <li> Bryan Ponce</li>
                  <li> Maylon Cuzco </li>
                  <li> Steeven Engracia</li>
              </ul>
  
          </div>
  
          <div class="content-foo">
              <h4>Celular</h4>
              <ul>
                  <li>
                      02-3740996
                  </li>
              </ul>
  
          </div>
  
          <div class="content-foo">
              <h4>E-Mail</h4>
  
              <ul>
                  <li>
                      PlayBBEM@gmail.com
                  </li>
              </ul>
          </div>
  
          <div class="content-foo">
              <h4>Direccion</h4>
              <ul>
                  <li>
                      Santo Domingo de los Tsachilas
                  </li>
              </ul>
          </div>
  
      </div>
      <h2 class="titulo-final">&copy; GRUPO 6 | PlayBBEM </h2>
  
      </div>
  
  </footer>
        `;
    }
  }
  window.customElements.define('footer-grupo6', Footer);
  
  