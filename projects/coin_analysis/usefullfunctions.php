<?php
function gen_alert_data($data)
{
  echo '<div class="row alert alert-success"> Submitted Data: ' . $data . '</div>';
}

function gen_input_field($type, $name, $label, $class = "", $value = "")
{
  //<div class="form-group form-inline mt-5 mb-2"> </div>
  echo '<label 
                class="col-3"
                for="' . $name . '">' . $label . '</label>
        <input  type="' . $type . '" 
                class="form-control ' . $class . '" 
                name="' . $name . '" 
                placeholder="' . $label . '" 
                id="' . $name . '" 
                value="' . $value . '">
          ';
}
