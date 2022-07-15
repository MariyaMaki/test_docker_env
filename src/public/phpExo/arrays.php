<?php
$family=array('frère1', 'frère2', 'soeur', 'mère', 'père');
echo $family[1];
?>
<pre> 
    <?= print_r($family) ?>
</pre>



<?php
$me= array('nom'=>'Krasteva', 
'prénom'=>'Mariya',
'âge'=>29,
'favoritefood'=> 'potatoes',
'likefootball'=>false, 
'favoritemovies'=>array('Totoro', 'le château ambulant', 'Ponyo')
); 
$me['hobby']=array('dormir', 'manger');
echo $me['hobby'][1];
echo $me['âge'];
$me['family']=$family;
?>
<pre>
    <?=print_r($me)?>
</pre>
<p><?=count($me['favoritemovies'])?></p>
<p><?=count($me['favoritemovies'])+ count($me['hobby'])?></p>

<?php 
$soulmate= array('nom'=>'West', 
'prénom'=>'Nathaniel',
'âge'=>32,
'favoritefood'=> 'potatoes',
'likefootball'=>false, 
'favoritemovies'=>array('Totoro', 'le château ambulant', 'Ponyo')
); 
$soulmate['hobby']=array('read', 'eat', 'sleep', 'repeat', 'dormir', 'manger');

?>
<pre>
  <?=print_r(array_merge($me['hobby'], $soulmate['hobby'])) ?> 
</pre> <!-- Cela rassemble les 2 arrays -->

<pre>
  <?=print_r(array_intersect($me['hobby'], $soulmate['hobby'])) ?>  
</pre> <!--c'est l'intersection, là où il y a les données identiques-->

<pre>
  <?=print_r(array_unique(array_merge($me['hobby'], $soulmate['hobby']))) ?> 
</pre> <!--enlève les doublons-->
