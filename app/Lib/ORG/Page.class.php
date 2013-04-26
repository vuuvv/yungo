<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// |         lanfengye <zibin_5257@163.com>
// +----------------------------------------------------------------------

class Page {
    
    // 分页栏每页显示的页数
    public $rollPage = 10;
    // 分页地址
    public $path = '';
    // 页数跳转时要带的参数
    public $parameter  ;
    // 分页URL地址
    public $url     =   '';
    // 默认列表每页显示行数
    public $listRows = 20;
    // 起始行数
    public $firstRow    ;
    // 分页总页面数
    public $totalPages  ;
    // 总行数
    public $totalRows  ;
    // 当前页数
    public $nowPage    ;
    // 分页的栏的总页数
    public $coolPages   ;
    // 分页显示定制
    protected $config  =    array('header'=>'条记录','prev'=>'<上一页','next'=>'下一页>','first'=>'第一页','last'=>'最后一页','theme'=>'%totalRow% %header% %nowPage%/%totalPage% 页 %first% %upPage% %linkPage% %downPage% %end%');
    // 默认分页变量名
    protected $varPage;

    /**
     * 架构函数
     * @access public
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     */
    public function __construct($totalRows,$listRows='',$parameter='',$url='') {
        $this->totalRows    =   $totalRows;
        $this->parameter    =   $parameter;
        $this->varPage      =   C('VAR_PAGE') ? C('VAR_PAGE') : 'p' ;
        if(!empty($listRows)) {
            $this->listRows =   intval($listRows);
        }
        $this->totalPages   =   ceil($this->totalRows/$this->listRows);     //总页数
        $this->nowPage      =   !empty($_GET[$this->varPage])?intval($_GET[$this->varPage]):1;
        if(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage  =   $this->totalPages;
        }
        $this->firstRow     =   $this->listRows*($this->nowPage-1);
    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    public function get_helper($max_pagers = 6) {
        $ret = array();
        $total = intval($this->totalPages);
        $pagesize = $this->listRows;
        $current = $this->nowPage;
        $after = $total - $current;
        $half = intval($max_pagers / 2);
        $min = 1;
        $max = $total;
        $needfirst = $needlast = true;
        if ($total <= $max_pagers) {
            $needfirst = false;
            $needlast = false;
        } else if ($current < $half) {
            $min = 1;
            $max = $max_pagers;
            $needfirst = false;
        } else if ($after < $half) {
            $min = $total - $max_pagers + 1;
            $max = $total;
            $needlast = false;
        } else {
            $min = $current - $half + 1;
            $max = $current + $half;
        }
        $ret['min'] = $min;
        $ret['max'] = $max;
        $ret['needfirst'] = $needfirst;
        $ret['needlast'] = $needlast;

        return $ret;
    }

    public function get_qs($page)
    {
        $qs = array();
        foreach ($_GET as $key => $val) {
            $qs[$key] = $val;
        }
        $qs['p'] = $page;
        return $qs;
    }

    public function get_url($page)
    {
        return U($this->path, $this->get_qs($page));
    }

    public function next_url()
    {
        return $this->get_url($this->nowPage + 1);
    }

    public function prev_url()
    {
        return $this->get_url($this->nowPage - 1);
    }

    public function first_url()
    {
        return $this->get_url(1);
    }

    public function last_url()
    {
        return $this->get_url($this->totalPages);
    }

    public function is_last()
    {
        return $this->nowPage == $this->totalPages;
    }

    public function is_first()
    {
        return $this->nowPage == 1;
    }

    /**
     * 分页显示输出
     * @access public
     */
    public function show() {
        if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $middle = ceil($this->rollPage/2); //中间位置

        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
        }else{
            if($this->parameter && is_string($this->parameter)) {
                parse_str($this->parameter,$parameter);
            }elseif(empty($this->parameter)){
                unset($_GET[C('VAR_URL_PARAMS')]);
                if(empty($_GET)) {
                    $parameter  =   array();
                }else{
                    $parameter  =   $_GET;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U($this->path,$parameter);
        }
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;
        $downRow        =   $this->nowPage+1;
        if ($upRow>0){
            $upPage     =   "<a href='".str_replace('__PAGE__',$upRow,$url)."'>".$this->config['prev']."</a>";
        }else{
            $upPage     =   '';
        }

        if ($downRow <= $this->totalPages){
            $downPage   =   "<a href='".str_replace('__PAGE__',$downRow,$url)."'>".$this->config['next']."</a>";
        }else{
            $downPage   =   '';
        }

        // << < > >>
        $theFirst = $theEnd = '';
        if ($this->totalPages > $this->rollPage) {
            if($this->nowPage - $middle < 1){
                $theFirst   =   '';
            }else{
                $theFirst   =   "<a href='".str_replace('__PAGE__',1,$url)."' >".$this->config['first']."</a>";
            }
            if($this->nowPage + $middle > $this->totalPages){
                $theEnd     =   '';
            }else{
                $theEndRow  =   $this->totalPages;
                $theEnd     =   "<a href='".str_replace('__PAGE__',$theEndRow,$url)."' >".$this->config['last']."</a>";
            }
        }

        // 1 2 3 4 5
        $linkPage = "";
        if ($this->totalPages != 1) {
            if ($this->nowPage < $middle) { //刚开始
                $start = 1;
                $end = $this->rollPage;
            } elseif ($this->totalPages < $this->nowPage + $middle - 1) {
                $start = $this->totalPages - $this->rollPage + 1;
                $end = $this->totalPages;
            } else {
                $start = $this->nowPage - $middle + 1;
                $end = $this->nowPage + $middle - 1;
            }
            $start < 1 && $start = 1;
            $end > $this->totalPages && $end = $this->totalPages;
            for ($page = $start; $page <= $end; $page++) {
                if ($page != $this->nowPage) {
                    $linkPage .= " <a href='".str_replace('__PAGE__',$page,$url)."'>&nbsp;".$page."&nbsp;</a>";
                } else {
                    $linkPage .= " <span class='current'>".$page."</span>";
                }
            }
        }
        $pageStr     =   str_replace(
            array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%linkPage%','%end%'),
            array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$linkPage,$theEnd),$this->config['theme']);
        return $pageStr;
    }

    /**
     * 分页显示输出
     * @access public
     */
    public function fshow() {
        if(0 == $this->totalRows) return '';
        $p              =   $this->varPage;
        $middle         =   ceil($this->rollPage/2); //中间位置

        // 分析分页参数
        if($this->url){
            $depr       =   C('URL_PATHINFO_DEPR');
            $url        =   rtrim(U('/'.$this->url,'',false),$depr).$depr.'__PAGE__';
        }else{
            if($this->parameter && is_string($this->parameter)) {
                parse_str($this->parameter,$parameter);
            }elseif(empty($this->parameter)){
                unset($_GET[C('VAR_URL_PARAMS')]);
                if(empty($_GET)) {
                    $parameter  =   array();
                }else{
                    $parameter  =   $_GET;
                }
            }
            $parameter[$p]  =   '__PAGE__';
            $url            =   U($this->path, $parameter);
        }
        //上下翻页字符串
        $upRow          =   $this->nowPage-1;
        $downRow        =   $this->nowPage+1;
        if ($upRow>0){
            $upPage     =   "<a href='".str_replace('__PAGE__',$upRow,$url)."'>".$this->config['prev']."</a>";
        }else{
            $upPage     =   '';
        }

        if ($downRow <= $this->totalPages){
            $downPage   =   "<a href='".str_replace('__PAGE__',$downRow,$url)."'>".$this->config['next']."</a>";
        }else{
            $downPage   =   '';
        }

        // << < > >>
        $theFirst = $theEnd = '';
        if ($this->totalPages > $this->rollPage) {
            if($this->nowPage - $middle < 1){
                $theFirst   =   '';
            }else{
                $theFirst   =   "<a href='".str_replace('__PAGE__',1,$url)."' >1</a> <i>...</i>";
            }
            if($this->nowPage + $middle > $this->totalPages){
                $theEnd     =   '';
            }else{
                $theEndRow  =   $this->totalPages;
                $theEnd     =   "<i>...</i> <a href='".str_replace('__PAGE__',$theEndRow,$url)."' >".$theEndRow."</a>";
            }
        }

        // 1 2 3 4 5
        $linkPage = "";
        if ($this->totalPages != 1) {
            if ($this->nowPage < $middle) { //刚开始
                $start = 1;
                $end = $this->rollPage;
            } elseif ($this->totalPages < $this->nowPage + $middle - 1) {
                $start = $this->totalPages - $this->rollPage + 1;
                $end = $this->totalPages;
            } else {
                $start = $this->nowPage - $middle + 1;
                $end = $this->nowPage + $middle - 1;
            }
            $start < 1 && $start = 1;
            $end > $this->totalPages && $end = $this->totalPages;
            for ($page = $start; $page <= $end; $page++) {
                if ($page != $this->nowPage) {
                    $linkPage .= " <a href='".str_replace('__PAGE__',$page,$url)."'>&nbsp;".$page."&nbsp;</a>";
                } else {
                    $linkPage .= " <span class='current'>".$page."</span>";
                }
            }
        }

        $pageStr     =   str_replace(
            array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%linkPage%','%end%'),
            array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$linkPage,$theEnd),$this->config['theme']);
        return $pageStr;
    }

}
