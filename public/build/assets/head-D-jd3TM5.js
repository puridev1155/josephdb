var s=Object.defineProperty;var a=(h,e,t)=>e in h?s(h,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):h[e]=t;var i=(h,e,t)=>(a(h,typeof e!="symbol"?e+"":e,t),t);/* empty css              *//* empty css              */import"./index-qVBN5XO4.js";class m{constructor(){i(this,"theme","light");i(this,"onThemeChange",()=>{this.theme==="dark"?this.html.classList.add("dark"):this.html.classList.remove("dark"),this.lightTheme&&this.darkTheme&&(this.theme==="light"?(this.lightTheme.classList.remove("hidden"),this.darkTheme.classList.add("hidden")):(this.darkTheme.classList.remove("hidden"),this.lightTheme.classList.add("hidden"))),localStorage.setItem("__Enoch and Mary Missions Organization_CONFIG__",JSON.stringify({theme:this.theme}))})}init(){this.html=document.getElementsByTagName("html")[0];const e=localStorage.getItem("__Enoch and Mary Missions Organization_CONFIG__");if(e){const t=JSON.parse(e);this.theme=t.theme}this.theme==="dark"&&this.html.classList.add("dark"),this.onThemeChange(),window.addEventListener("DOMContentLoaded",()=>{this.after()})}after(){this.lightTheme=document.getElementById("light-theme"),this.darkTheme=document.getElementById("dark-theme"),this.lightTheme&&this.darkTheme&&(this.lightTheme.addEventListener("click",e=>{this.theme="dark",this.onThemeChange()}),this.darkTheme.addEventListener("click",e=>{this.theme="light",this.onThemeChange()})),this.onThemeChange()}}new m().init();
