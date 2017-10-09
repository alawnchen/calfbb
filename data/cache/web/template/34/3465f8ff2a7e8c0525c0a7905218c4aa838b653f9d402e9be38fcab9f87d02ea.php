<?php

/* project/newproject.html */
class __TwigTemplate_81a977f70fba7e8ed02c6c2297eeeba71ec25655c5ea1d6310b3ca2ca7e2f9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "common/headerLayui.html");
        echo "



";
        // line 5
        echo twig_include($this->env, $context, "common/nav.html");
        echo "





<!-- 内容主体区域 -->


";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "<!--<div class=\"layui-footer\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->


<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
//    layui.use('element', function(){
//        var element = layui.element;
//
//    });
    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#carouse' //绑定元素
            ,url: 'index.php?m=web&c=files&a=uploadFile' //上传接口
            ,done: function(res){
                //上传完毕回调
                if(res.success==true && res.path){

                    \$('#upload_img').attr('src',\"/attachment/\"+res.path);
                    \$('input[name=image]').val(res.path);
                }


            }
            ,error: function(){
                //请求异常回调
            }
        });
    });
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });


</script>";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
<style>
    /*css*/
    .left{width:90%;margin:0 auto;}
    .border{border:0px solid #FF5722;margin-top:1rem;float: left;margin-left:23px; }
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo{background-color:#F8F8F8;display:block;text-align:center;;border:1px solid  #d2d2d2;width:200px;height:230px;margin: 0 auto;}
    .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo img{width:100%;height:70%;}
    .dataListTwo p{font-size:1.5rem;}
    .site-demo-button{padding-bottom: 150px;}
    .layui-form{width:80%;margin: 0 auto;margin-top:30px;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=newProject\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:80%;margin:0 auto;\">
    <legend>新建项目</legend>

    <form class=\"layui-form \" action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=web&c=project&a=createProject\" method=\"post\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">项目名</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"name\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入项目名\" class=\"layui-input\">
            </div>
        </div>


            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">运营绑定手机号</label>
                <div class=\"layui-input-block\">
                    <input type=\"tel\" name=\"phone\" lay-verify=\"phone\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>


            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">运营绑定邮箱</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>





        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">类型</label>
            <div class=\"layui-input-block\">
                <input type=\"radio\" name=\"type\" value=\"1\" title=\"个人\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>个人</span></div>
                <input type=\"radio\" name=\"type\" value=\"2\" title=\"企业\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>企业</span></div>
            </div>
        </div>
        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">项目封面</label>
            <div class=\"layui-input-block\">
                <button type=\"button\" class=\"layui-btn\" id=\"carouse\">
                    <i class=\"layui-icon\">&#xe67c;</i>上传图片
                </button>
            </div>
        </div>
        <input type=\"hidden\" name=\"image\" value=\"resource/screen/images/timg.jpg\">
        <div class=\"layui-form-item layui-form-text\">
         
            <div class=\"layui-input-block\">
                <img id=\"upload_img\" style=\"width:100px;height:100px;\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["APP"]) ? $context["APP"] : null), "html", null, true);
        echo "resource/screen/images/timg.jpg\" alt=\"\">
            </div>
        </div>
        <!--<div class=\"layui-form-item layui-form-text\">-->
            <!--<label class=\"layui-form-label\">项目简介</label>-->
            <!--<div class=\"layui-input-block\">-->
                <!--<textarea name=\"\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>-->
            <!--</div>-->
        <!--</div>-->

        <div class=\"layui-form-item\">
            <div class=\"layui-input-block\">
                <input type=\"submit\" class=\"layui-btn\" value=\"立即提交\" lay-submit=\"\" lay-filter=\"demo1\">
                <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
            </div>
        </div>
    </form>


</fieldset>

";
    }

    public function getTemplateName()
    {
        return "project/newproject.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 83,  119 => 36,  110 => 30,  93 => 15,  90 => 14,  41 => 105,  39 => 14,  27 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"common/headerLayui.html\")}}



{{ include(\"common/nav.html\")}}





<!-- 内容主体区域 -->


{% block body %}

<style>
    /*css*/
    .left{width:90%;margin:0 auto;}
    .border{border:0px solid #FF5722;margin-top:1rem;float: left;margin-left:23px; }
    .datalist{display:block;text-align:center;line-height:230px;border:1px dashed  #01AAED;width:200px;height:230px;margin: 0 auto;}
    .datalist:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo{background-color:#F8F8F8;display:block;text-align:center;;border:1px solid  #d2d2d2;width:200px;height:230px;margin: 0 auto;}
    .dataListTwo:hover{border:1px dashed #FF5722;cursor:pointer;}
    .dataListTwo img{width:100%;height:70%;}
    .dataListTwo p{font-size:1.5rem;}
    .site-demo-button{padding-bottom: 150px;}
    .layui-form{width:80%;margin: 0 auto;margin-top:30px;}
</style>
<blockquote class=\"layui-elem-quote layui-text\">
    温馨提示：  Hi，test1，您所在的会员组： 运营， 账号有效期限：2017-06-27 ~~ 无限制， 可创建 1000 个项目，已创建 5 个，还可创建 995 个项目。 <a href=\"{{_G['APP_URL']}}?m=web&c=project&a=newProject\" target=\"_blank\">我要创建新项目</a>
</blockquote>

<fieldset class=\"layui-elem-field site-demo-button\" style=\"width:80%;margin:0 auto;\">
    <legend>新建项目</legend>

    <form class=\"layui-form \" action=\"{{_G['APP_URL']}}?m=web&c=project&a=createProject\" method=\"post\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">项目名</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"name\"  required lay-verify=\"required\"  autocomplete=\"off\" placeholder=\"请输入项目名\" class=\"layui-input\">
            </div>
        </div>


            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">运营绑定手机号</label>
                <div class=\"layui-input-block\">
                    <input type=\"tel\" name=\"phone\" lay-verify=\"phone\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>


            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">运营绑定邮箱</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>





        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">类型</label>
            <div class=\"layui-input-block\">
                <input type=\"radio\" name=\"type\" value=\"1\" title=\"个人\" checked=\"\"><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>个人</span></div>
                <input type=\"radio\" name=\"type\" value=\"2\" title=\"企业\"><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>企业</span></div>
            </div>
        </div>
        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">项目封面</label>
            <div class=\"layui-input-block\">
                <button type=\"button\" class=\"layui-btn\" id=\"carouse\">
                    <i class=\"layui-icon\">&#xe67c;</i>上传图片
                </button>
            </div>
        </div>
        <input type=\"hidden\" name=\"image\" value=\"resource/screen/images/timg.jpg\">
        <div class=\"layui-form-item layui-form-text\">
         
            <div class=\"layui-input-block\">
                <img id=\"upload_img\" style=\"width:100px;height:100px;\" src=\"{{APP}}resource/screen/images/timg.jpg\" alt=\"\">
            </div>
        </div>
        <!--<div class=\"layui-form-item layui-form-text\">-->
            <!--<label class=\"layui-form-label\">项目简介</label>-->
            <!--<div class=\"layui-input-block\">-->
                <!--<textarea name=\"\" placeholder=\"请输入内容\" class=\"layui-textarea\"></textarea>-->
            <!--</div>-->
        <!--</div>-->

        <div class=\"layui-form-item\">
            <div class=\"layui-input-block\">
                <input type=\"submit\" class=\"layui-btn\" value=\"立即提交\" lay-submit=\"\" lay-filter=\"demo1\">
                <!--<input type=\"reset\" value=\"重置\" class=\"layui-btn layui-btn-primary\">-->
            </div>
        </div>
    </form>


</fieldset>

{% endblock %}
<!--<div class=\"layui-footer\">-->
    <!--&lt;!&ndash; 底部固定区域 &ndash;&gt;-->
    <!--© 技术支持 - 牛宝宝团队-->
<!--</div>-->
<!--<div style=\"padding: 15px;\">内容主体区域</div>-->
<!--</div>-->


<script src=\"./resource/screen/js/jquery-1.9.1.js\"></script>
<script src=\"./resource/layui/layui.js\"></script>
<script>
    //JavaScript代码区域
//    layui.use('element', function(){
//        var element = layui.element;
//
//    });
    layui.use('upload', function(){
        var upload = layui.upload;

        //执行实例
        var uploadInst = upload.render({
            elem: '#carouse' //绑定元素
            ,url: 'index.php?m=web&c=files&a=uploadFile' //上传接口
            ,done: function(res){
                //上传完毕回调
                if(res.success==true && res.path){

                    \$('#upload_img').attr('src',\"/attachment/\"+res.path);
                    \$('input[name=image]').val(res.path);
                }


            }
            ,error: function(){
                //请求异常回调
            }
        });
    });
    layui.use('form', function(){
        var form = layui.form;

        //各种基于事件的操作，下面会有进一步介绍
    });


</script>", "project/newproject.html", "C:\\wamp\\www\\lnmpbao\\web\\template\\project\\newproject.html");
    }
}