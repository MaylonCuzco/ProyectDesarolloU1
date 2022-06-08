//Catalogo
class SliderCatalogo extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML=
        `<div class="imagenslider">
            <ul>
                <li><img src="img/principal.png"></li>
                <li><img src="img/slider2.jpg"></li>
                <li><img src="img/slider3.jpg"></li>
            </ul>
        </div>
        <style>    
        .imagenslider{
            /* border: solid 2px black; */
            margin: 50px;
            width: 70%;
            text-align: center;
            overflow: hidden;
            position: relative;
            left: 10%;
        }
        .imagenslider ul{
            display: flex;
            padding: 0;
            width: 300%;
            animation: slide 10s infinite;
        }
        .imagenslider li{
            list-style: none;
            width: 100%;
        }
        .imagenslider li>img{
            height: 280px;
            width: 100%;
        }
        @keyframes slide {
            0%{margin-left: 0%;}
            30%{margin-left: 0%;}
        
            35%{margin-left: -100%;}
            65%{margin-left: -100%;}
        
            70%{margin-left: -200%;}
            90%{margin-left: -200%;}
        }
       
        </style>
        `;
       
    }
}
window.customElements.define('slider-catal',SliderCatalogo);


//PROXIMOS
class SliderProximos extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML=
        `
        <div class="imagenslider">
            <ul>
                <li><img src="img/slider4.jpg"></li>
                <li><img src="img/slider5.jpg"></li>
                <li><img src="img/slider6.jpg"></li>
            </ul>
        </div>
        <style>
        .imagenslider{
            /* border: solid 2px black; */
            margin: 50px;
            width: 70%;
            text-align: center;
            overflow: hidden;
            position: relative;
            left: 10%;
        }
        .imagenslider ul{
            display: flex;
            padding: 0;
            width: 300%;
            animation: slide 10s infinite;
        }
        .imagenslider li{
            list-style: none;
            width: 100%;
        }
        .imagenslider li>img{
            height: 280px;
            width: 100%;
        }
        @keyframes slide {
            0%{margin-left: 0%;}
            30%{margin-left: 0%;}
        
            35%{margin-left: -100%;}
            65%{margin-left: -100%;}
        
            70%{margin-left: -200%;}
            90%{margin-left: -200%;}
        }       
        </style>
        `;
       
    }
}
window.customElements.define('slider-prox',SliderProximos);


