/********异步加载页尾*********/
$(function(){
	$('#footer').load('../data/footer.php');
});
/*********用户注册信息提交*************/
 $('#btn').click(function(){
        $.ajax({
            type:'POST',
            url:'data/register.php',
            data:{uname: uname.value, upwd: upwd.value},
            success:function(result){
                if(result.code==1){
                    setInterval (function(){
                        location.href='../index.html';
                    },1000)
					$('#login').html('欢迎登录:'+uname.value);
                }else {
                    alert('注册失败! ');
                }
            }
        })
    })
/***********注册显示**********/
uname.onblur=function(){
    if(this.validity.valueMissing ){
        var msg='用户名不能为空！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.tooShort){
        var msg='用户名不能少于8位！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.tooLong){
        var msg="用户名不能多于16位！"
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else{
        this.nextElementSibling .innerHTML="用户名正确";
        this.nextElementSibling .className='help-block bg-success';
        this.setCustomValidity ('');
    }
}
upwd.onblur=function(){
    if(this.validity.valueMissing ){
        var msg='密码不能为空！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.tooShort){
        var msg='密码不能少于8位！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.tooLong){
        var msg="密码不能多于16位！"
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else{
        this.nextElementSibling .innerHTML="密码正确";
        this.nextElementSibling .className='help-block bg-success';
        this.setCustomValidity ('');
    }
}
email.onblur=function(){
    if(this.validity.valueMissing ){
        var msg='邮箱不能为空！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.typeMismatch){
        var msg='邮箱格式不正确！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }
    else{
       this.nextElementSibling .innerHTML="邮箱正确";
       this.nextElementSibling .className='help-block bg-success';
        this.setCustomValidity ('');
    }
}
age.onblur=function(){
    if(this.validity.valueMissing ){
        var msg='年龄不能为空！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.rangeOverflow ){
        var msg='年龄不能超过65岁！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }
    else if(this.validity.rangeUnderflow ){
        this.nextElementSibling .innerHTML="年龄不能小于18岁";
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else{
        this.nextElementSibling .innerHTML="正确";
        this.nextElementSibling .className='help-block bg-success';
        this.setCustomValidity ('');
    }
}
birth.onblur=function(){
    if(this.validity.valueMissing ){
        var msg='日期不能为空！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }else if(this.validity.typeMismatch){
        var msg='格式不正确！';
        this.nextElementSibling .innerHTML=msg;
        this.nextElementSibling .className='help-block bg-danger';
        this.setCustomValidity (msg);
    }
    else{
        this.nextElementSibling .innerHTML="正确";
        this.nextElementSibling .className='help-block bg-success';
        this.setCustomValidity ('');
    }
}

