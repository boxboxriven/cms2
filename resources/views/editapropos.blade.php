<head>
    <title>Modification a propos</title>
</head>
<body>
<form action="editapropos1" method="post">
    @csrf
<div class="page">
    <h1>Vous pouvez ici modifier la page a propos</h1>
  <label class="field field_v1">
    <input type='text'  class="field__input" placeholder="" required name='var2'>
    <span class="field__label-wrap">
      <span class="field__label">La Description</span>
    </span>
  </label>
  <label class="field field_v2">
    <input type='number' class="field__input" placeholder="" required name='var1'>
    <span class="field__label-wrap">
      <span class="field__label">Le Numero de telephone</span>
    </span>
  </label> 
</div>

<input button type='submit' value='Enregistrer les modification' class="favorite styled" >

</form>   
</body>
<style>
    /*
=====
RESET STYLES
=====
*/

.field__input{ 
  --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);
  
  background-color: transparent;
  border-radius: 0;
  border: none;

  -webkit-appearance: none;
  -moz-appearance: none;

  font-family: inherit;
  font-size: inherit;
}

.field__input:focus::-webkit-input-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

.field__input:focus::-moz-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

/*
=====
CORE STYLES
=====
*/

.field{
  --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
  --uiFieldPaddingRight: var(--fieldPaddingRight, 1rem);
  --uiFieldPaddingLeft: var(--fieldPaddingLeft, 1rem);   
  --uiFieldBorderColorActive: var(--fieldBorderColorActive, rgba(22, 22, 22, 1));

  display: var(--fieldDisplay, inline-flex);
  position: relative;
  font-size: var(--fieldFontSize, 1rem);
}

.field__input{
  box-sizing: border-box;
  width: var(--fieldWidth, 100%);
  height: var(--fieldHeight, 3rem);
  padding: var(--fieldPaddingTop, 1.25rem) var(--uiFieldPaddingRight) var(--fieldPaddingBottom, .5rem) var(--uiFieldPaddingLeft);
  border-bottom: var(--uiFieldBorderWidth) solid var(--fieldBorderColor, rgba(0, 0, 0, .25));  
}

.field__input:focus{
  outline: none;
}

.field__input::-webkit-input-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.field__input::-moz-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.field__input:focus::-webkit-input-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.field__input:focus::-moz-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.field__label-wrap{
  box-sizing: border-box;
  pointer-events: none;
  cursor: text;

  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.field__label-wrap::after{
  content: "";
  box-sizing: border-box;
  width: 100%;
  height: 0;
  opacity: 0;

  position: absolute;
  bottom: 0;
  left: 0;
}

.field__input:focus ~ .field__label-wrap::after{
  opacity: 1;
}

.field__label{
  position: absolute;
  left: var(--uiFieldPaddingLeft);
  top: calc(50% - .5em);

  line-height: 1;
  font-size: var(--fieldHintFontSize, inherit);

  transition: top .2s cubic-bezier(0.9, -0.15, 0.1, 1.15), opacity .2s ease-out, font-size .2s ease-out;
  will-change: bottom, opacity, font-size;
}

.field__input:focus ~ .field__label-wrap .field__label,
.field__input:not(:placeholder-shown) ~ .field__label-wrap .field__label{
  --fieldHintFontSize: var(--fieldHintFontSizeFocused, .75rem);

  top: var(--fieldHintTopHover, .25rem);
}

/* 
effect 1
*/

.field_v1 .field__label-wrap::after{
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  transition: opacity .2s ease-out;
  will-change: opacity;
}

/* 
effect 2
*/

.field_v2 .field__label-wrap{
  overflow: hidden;
}

.field_v2 .field__label-wrap::after{
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  transform: translate3d(-105%, 0, 0);
  will-change: transform, opacity;
  transition: transform .285s ease-out .2s, opacity .2s ease-out .2s;
}

.field_v2 .field__input:focus ~ .field__label-wrap::after{
  transform: translate3d(0, 0, 0);
  transition-delay: 0;
}

/*
effect 3
*/

.field_v3 .field__label-wrap::after{
  border: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  will-change: opacity, height;
  transition: height .2s ease-out, opacity .2s ease-out;
}

.field_v3 .field__input:focus ~ .field__label-wrap::after{
  height: 100%;
}

/*
=====
LEVEL 4. SETTINGS
=====
*/

.field{
  --fieldBorderColor: #D1C4E9;
  --fieldBorderColorActive: #673AB7;
}

/*
=====
DEMO
=====
*/

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  margin: 0;

  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.page{
  box-sizing: border-box;
  width: 100%;
  max-width: 480px;
  margin: auto;
  padding: 1rem;

  display: grid;
  grid-gap: 30px;
}

.linktr{
  order: -1;
  padding: 1.75rem;
  text-align: center;
}

.linktr__goal{
  background-color: rgb(209, 246, 255);
  color: rgb(8, 49, 112);
  box-shadow: rgb(8 49 112 / 24%) 0px 2px 8px 0px;
  border-radius: 2rem;
  padding: .5rem 1.25rem;
}

@media (min-width: 1024px){
  
  .linktr{
    position: absolute; 
    right: 1rem; 
    bottom: 1rem;
  }
}

.r-link{
    --uirLinkDisplay: var(--rLinkDisplay, inline-flex);
    --uirLinkTextColor: var(--rLinkTextColor);
    --uirLinkTextDecoration: var(--rLinkTextDecoration, none);

    display: var(--uirLinkDisplay) !important;
    color: var(--uirLinkTextColor) !important;
    text-decoration: var(--uirLinkTextDecoration) !important;
}
.styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
                margin-left:650px;
                
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}
</style>