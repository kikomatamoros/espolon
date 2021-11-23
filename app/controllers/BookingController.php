<?php
class BookingController extends Controller{
    public function book(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $booking= new Books;
            $booking->loadData($post);
            if ($booking->validate()) {
                /*if(!isset($_SESSION['is_logged_in'])){
                    $this->view('login.html',['reserva'=>$booking]);
                }*/
                $booking->save();
                header("Location:".ROOT_URL.'/pages/home');
            }else{
             $this->view('book.html',['errors'=>$booking->errors]);
            }
        }else{
            $this->view('book.html');
        }
    }
}