<?php  
namespace App\Entity;
class Post{
 private $id;
 private $title;
 private $content;
 private $author;
 private $created_at;
 private $updated_at;

function  __construct($id,$title,$content,$author,$created_at,$updated_at){
    $this->id= $id;
    $this->title=$title;
    $this->content=$content;
    $this->author=$author;
    $this->created_at=$created_at;
    $this->updated_at=$updated_at;
}
function  __toString(){
    return "-id: ".$this->id.
    "\n-title:".$this->title.
    "\n-content:".$this->content.
    "\n-author:".$this->author.
    "\n-created_at:".$this->created_at.
    "\n-updated_at:".$this->updated_at;
}
//Getters
function getID() {
        return $this->id;
}
function getTitle() {
        return $this->title;
}
function getContent() {
        return $this->content;
}
function getAuthor(){
        return $this->author;
}
function getCreated_at(){
        return $this->created_at;
}
function getUpdated_at(){
        return $this->updated_at;
}
// Setters
function setID($id) {
         $this->id = $id;     
}
function setTitle($title) {
    $this->title = $title;     
}
function setContent($content){
    $this->content = $content;     
}
function setAuthor($author) {
    $this->author = $author;     
}
function setCreated_at($created_at) {
    $this->created_at = $created_at;     
}
function setUpdated_at($updated_at) {
    $this->updated_at = $updated_at;     
}
}
//$P1=new Post(1,"title1","some content","author1","12-02-2023","14-03-2023");
//print($P1);
?>