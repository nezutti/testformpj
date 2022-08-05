const $form = document.getElementById('form');
const $error = document.getElementById('error');




$form.addEventListener('change', update);
$form.addEventListener('input', update);

 function update(e) {
  const type = e.target.type;
  const validity = e.target.validity;

  const $postcode = $form.elements["postcode"];

  if ($postcode.value);
  
}










