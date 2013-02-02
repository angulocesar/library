<ul>
   <li>
   <?php
     echo $this->Html->link( _('Show all User'), array('      controller' => 'user','action'=>'index') );
?>
    </li>
<li>
   <?php
     echo $this->Html->link( _('Show all Book'), array('      controller' => 'book','action'=>'index') );
?>
<li>
   <?php
     echo $this->Html->link( _('Show all Category'), array('      controller' => 'category','action'=>'index') );
?>
    </li>
<li>
   <?php
     echo $this->Html->link( _('Show all Loan'), array('      controller' => 'loan','action'=>'index') );
?>
    </li>
    </li>
</ul>