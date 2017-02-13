<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:06 AM
 */
 function drawChild($page){
     global $config;
     ?>
     <?foreach ($page as $key => $pages){ ?>
         <li>
         <a id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
         </li>
     <?}

 }

function checkDrop($id){?>
    <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
        <?return true?>
    <?}else{?>
        <?return false?>
    <?}
}

function checkSession(){?>
    <?if (isset($_SESSION['msg'])){?>
        <? unset($_SESSION['msg']);
        return true
        ?>
    <?}else{?>
        <?return false
        ?>
    <?}
}
function checkErrorSession(){?>
    <?if (isset($_SESSION['error'])){?>
        <? unset($_SESSION['error']); return true?>
    <?}else{?>
        <?return false?>
    <?}
}
function drawParent($page,$page_cont){?>
    <? $cnt=0;?>
    <? foreach ($page as $key=>$pages){
        if ($pages->id==$page_cont->parent_id){
            $cnt++;
            return $pages->title;
        }
    } ?>

    <?if ($cnt==0){
        return $page_cont->title;
    }?>
<?}?>

<?function getChild($page,$depth){
    if($page->already!=2){
        $page->already=2;
        if ($depth==1){?>
            <option><?='&nbsp&nbsp&nbsp&nbsp'.$page->title?></option><?
        }
        if ($depth==2){?>
            <option><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->title?></option><?
        }
        if ($depth==3){?>
            <option><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->title?></option><?
        }
        if ($depth==0){?>
            <option><?=$page->title?></option>
        <?}
        if ($depth==4){?>
            <option><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->title?></option><?
        }

    }
    if(!empty($page->child)){
        foreach ($page->child as $key=>$child){
            getChild($child,$depth+1);
        }
    }
}?>

