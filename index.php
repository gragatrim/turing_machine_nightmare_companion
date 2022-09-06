<?php
include "cards.php";

if (!empty($_GET['card_1']) && !empty($_GET['card_2']) && !empty($_GET['card_3']) && !empty($_GET['card_4'])) {
  $logic_table = '<table style="clear: both;" class="logic_table"><tr><th>Card #</th><th>Clue<th>A</th><th>B</th><th>C</th><th>D</th><th>E</th><th>F</th><tr>';
  $cards_in_use[] = isset($_GET['card_1']) ? $cards[$_GET['card_1']] : null;
  $cards_in_use[] = isset($_GET['card_2']) ? $cards[$_GET['card_2']] : null;
  $cards_in_use[] = isset($_GET['card_3']) ? $cards[$_GET['card_3']] : null;
  $cards_in_use[] = isset($_GET['card_4']) ? $cards[$_GET['card_4']] : null;
  if(!empty($_GET['card_5'])) {
   $cards_in_use[] = $cards[$_GET['card_5']];
  }
  if(!empty($_GET['card_6'])) {
   $cards_in_use[] = $cards[$_GET['card_6']];
  }
  $current_card = 0;
  $tr_style = '';
  foreach($cards_in_use as $card) {
    foreach ($card->conditions AS $condition) {
      if ($current_card != $card->number) {
        $current_card = $card->number;
        if ($tr_style == '') {
          $tr_style = 'style="background: grey;"';
        } else {
          $tr_style = '';
        }
      }
      $logic_table .= '<tr ' . $tr_style . '><td>' . $card->number . '</td><td>' . $condition . "</td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td><td><input type='text'
         class='checkbox'
         onfocus='this.blur()'
         readonly='true'
         size='1'
         value='' onclick='quadstate_Marks(this)' /></td></tr>";
    }
  }
  $logic_table .= '</table>';

  $guess_table = '<table style="float: left;" class="logic_table">
                    <tr>
                      <th><div class="triangle"></div></th>
                      <th><div class="square"></div></th>
                      <th><div class="circle"></div></th>
                      <th>A</th>
                      <th>B</th>
                      <th>C</th>
                      <th>D</th>
                      <th>E</th>
                      <th>F</th>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                    <tr>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td>
                        <select>
                          <option value="-">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="" onclick="tristate_Marks(this)" /></td>
                    </tr>
                  </table>';
  $answer_table = '<table style="float: left;">
                    <tr>
                      <th><div class="triangle"></div></th>
                      <th><div class="square"></div></th>
                      <th><div class="circle"></div></th>
                    </tr>
                    <tr>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="5" onclick="number_x(this, 5)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="5" onclick="number_x(this, 5)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="5" onclick="number_x(this, 5)" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="4" onclick="number_x(this, 4)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="4" onclick="number_x(this, 4)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="4" onclick="number_x(this, 4)" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="3" onclick="number_x(this, 3)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="3" onclick="number_x(this, 3)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="3" onclick="number_x(this, 3)" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="2" onclick="number_x(this, 2)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="2" onclick="number_x(this, 2)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="2" onclick="number_x(this, 2)" /></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="1" onclick="number_x(this, 1)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="1" onclick="number_x(this, 1)" /></td>
                      <td><input type="text" class="checkbox" onfocus="this.blur()" readonly="true" size="1" value="1" onclick="number_x(this, 1)" /></td>
                    </tr>
                  </table>';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>

.triangle {
  width: 20px;
  height: 20px;
  background: #57acd8;
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  display: inline-block;
}

.square {
  width: 20px;
  height: 20px;
  background: #f0b61d;
  display: inline-block;
}

.circle {
  width: 20px;
  height: 20px;
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
  border-radius: 25px;
  background: #8369b5;
  display: inline-block;
}

.checkbox {
  text-align: center;
  border: none;
  cursor: default;
}

table{
  border-collapse: collapse;
}

.logic_table tr{
  border-bottom: 2px solid #ddd;
}

</style>
<script>
function tristate(control, value1, value2, value3) {
  switch (control.value.charAt(0)) {
    case value1:
      control.value = value2;
    break;
    case value2:
      control.value = value3;
    break;
    case value3:
      control.value = value1;
    break;
    default:
      // display the current value if it's unexpected
      alert(control.value);
  }
}

function quadstate(control, value1, value2, value3, value4) {
  switch (control.value) {
    case value1:
      control.value = value2;
    break;
    case value2:
      control.value = value3;
    break;
    case value3:
      control.value = value4;
    break;
    case value4:
      control.value = value1;
    break;
    default:
      // display the current value if it's unexpected
      console.log(control.value);
      control.value = value1;
  }
}
function quadstate_Marks(control) {
  quadstate(control,'', '\u274C', '\u2705', '\uD83C\uDF1F');
}

function tristate_Marks(control) {
  tristate(control,'', '\u274C', '\u2705');
}

function number_x(control, value) {
  tristate(control, '\u274C', '\u2705', value.toString());
}
</script>
</head>
<body>
<?php
if (!empty($_GET['card_1']) && !empty($_GET['card_2']) && !empty($_GET['card_3']) && !empty($_GET['card_4'])) {
  echo $guess_table;
  echo $answer_table;
  echo $logic_table;
}
?>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get" autocomplete="on">
<div style="clear: both;">
Card 1: <input type="text" name="card_1" value="<?php echo !empty($_GET['card_1']) ? $_GET['card_1'] : ''; ?>"/><br/>
Card 2: <input type="text" name="card_2" value="<?php echo !empty($_GET['card_2']) ? $_GET['card_2'] : ''; ?>"/><br/>
Card 3: <input type="text" name="card_3" value="<?php echo !empty($_GET['card_3']) ? $_GET['card_3'] : ''; ?>"/><br/>
Card 4: <input type="text" name="card_4" value="<?php echo !empty($_GET['card_4']) ? $_GET['card_4'] : ''; ?>"/><br/>
Card 5: <input type="text" name="card_5" value="<?php echo !empty($_GET['card_5']) ? $_GET['card_5'] : ''; ?>"/><br/>
Card 6: <input type="text" name="card_6" value="<?php echo !empty($_GET['card_6']) ? $_GET['card_6'] : ''; ?>"/><br/>
<input type="submit" value="Submit"/>
</div>
</form>
<button onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];?>';">Reset Cards</button>
</body>
</html>
