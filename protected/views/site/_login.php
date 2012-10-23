<?php 
		$today=date('m').date('d');
		$client=new SoapClient('https://serveur1.givav.org/adminVAV/webService/vols.php?wsdl');
		$pilotes=new SimpleXMLElement($client->getPilote(
			'<authentification>
			   <assoc>928302</assoc>
			   <password>mibaiz</password>
			   <noPlanche>1</noPlanche>
			   <version>1.0</version>
			   <jour>'.$today.'</jour>
			</authentification>'
		));
		$arr=array();
		foreach($pilotes as  $value){
			if ((string) $value->actif == '1') {
				//$remorqueurs = array_merge($remorqueurs, array(htmlentities((int)$value->id_aeronef)=>htmlentities((string) $value->immat)));
				//$arr[htmlentities((string)$value->code)]=( (string)$value->nomPrenom);
					$arr[] = array(
						'id' => (string)$value->code,
						'value' => (string)$value->nomPrenom,
					);
			}
		}
?>
<?php /** @var TbActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'horizontalForm',
    'type'=>'stacked',
    //'htmlOptions'=>array('class'=>'well'),
)); ?>
 			<?php echo $form->hiddenField($model,'username'); ?>
			<?php echo $form->labelEx($model,'username'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
				'name'=>'Login[username]',
				//'value'=>($model->pilote!=null)?$model->pilote->nom_prenom:"",
				//'sourceUrl' => $this->createUrl('pdv/SuggestPilot'),
				'source'=>$arr,
				'options'=>array(
					'minLength'=>'2',
					'select' => 'js:function(event, ui){ jQuery("#LoginForm_username").val(ui.item["id"]); }'
				),
				'htmlOptions'=>array(
					'style'=>'height:20px;',
					//'class'=>'span3'
				),
			));
			?>
			<?php echo $form->error($model,'username'); ?>
<?php //echo $form->textFieldRow($model, 'username', array('class'=>'span4')); ?>&nbsp;
<?php echo $form->labelEx($model,'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo $form->error($model,'password'); ?>

<hr />
<?php echo $form->checkboxRow($model, 'rememberMe'); ?>&nbsp;&nbsp;
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'icon'=>'ok', 'label'=>'Submit')); ?>

<?php $this->endWidget(); ?>
<?php //print_r($arr); ?>
<script>
$('.btn').onclick="javascript:document.getElementById('o_user').value=document.getElementById('LoginForm_username').value;document.getElementById('o_pass').value=document.getElementById('LoginForm_password').value;document.getElementById('o_form').submit();this.form.submit()";
</script>
