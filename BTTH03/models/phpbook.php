<?php
class Patient{
    // thuoc tính
    private $member;
    private $image;
    private $category;
    private $article;
    
    
    // khai bao phuong thuc, muc đích trả về mảng của các đối tượng
    public function __construct($member,$image, $category, $article)
    {
        $this->member = $member;
        $this->image = $image;
        $this->category = $category;
        $this->article = $article;
        
        
    }

    //getter/setter
    public function getMember(){
        return $this->member;
    }
    public function setMember($member){
        $this->member = $member;
    }
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function getCatrgory(){
        return $this->category;
    }
    public function setCartegory($category){
        $this->category = $category;
    }
    public function getArticle(){
        return $this->article;
    }
    public function setArticle($article){
        $this->article = $article;
    }
    
}