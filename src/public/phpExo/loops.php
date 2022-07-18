<!-- <?php
$names= array('John', 'jeanne', 'Joan', 'emile');
var_dump($names);

foreach ($names as $key => $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
?> -->

<!-- <?php $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They'); 
foreach ($pronouns as $pronoun){
    if($pronoun=="He/She"){
        echo "$pronoun codes <br>";
    
    }
    else {
        echo "$pronoun code <br>";
    }
}
?> -->

<!-- <?php $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They'); 
foreach ($pronouns as $key => $value){
	
    if($key==2){
        echo "$value codes <br>";
    
    }
    else {
        echo "$value code <br>";
    }
}
?> -->

<!-- <?php 
$count=1;
while($count<=50){
    echo"$count coucou hibou! <br>";
    $count++;
    // $count= $count+1;
} 
?> -->

<!-- <?php 
for($count=1; $count<=50; $count++) {
    echo"$count coucou hibou! <br>";
}
?> -->

<!-- <?php 
$colleagues=['antoine', 'semih', 'kevin', 'aurelie'];
foreach($colleagues as $key =>$value){
        $colleagues[$key]=ucfirst($value);
}
print_r($colleagues);
?> -->


<select name="countries">
    <option value="" disabled selected>Select a country</option>

    <?php $countries = array(
    'BE' => 'Belgium',
    'GE' => 'Germany',
    'GR' => 'Greece',
    'IT' => 'Italy',
    'FR' => 'France',
    'LT' => 'Lithuania',
    'LU' => 'Luxembourg',
    'IE' => 'Irland',
    'DE' => 'Denmark',
    'GB' => 'United Kingdom'
); 
foreach($countries as $key => $value){
    echo "<option value=$key>$value</option>";
}
?>
</select>