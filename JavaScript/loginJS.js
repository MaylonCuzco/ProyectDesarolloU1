class LoginSesion extends HTMLElement{
    constructor(){
      super();
    }
    connectedCallback(){
      let shadowRoot = this.attachShadow({mode:'open'});
      const t = document.querySelector('#template-sesion');
      const instancia = t.content.cloneNode(true);
      shadowRoot.appendChild(instancia);
    }
  }
  window.customElements.define('inicio-sesion', LoginSesion);