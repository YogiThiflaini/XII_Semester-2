import { useState } from "react";
import Tabel from './Tabel';


function Menu() {
    const titel = "Dartar Menu Restoran"
    const [menus,useMenu]= useState(
        [
            {
                idmenu:1,
                idkategori:1,
                menu:"Apel Manalagi",
                gambar:"apelmanalagi.png",
                harga:3000,
            },
            {
                idmenu:2,
                idkategori:1,
                menu:"Pisang Raja",
                gambar:"pisangraja.png",
                harga:5000, 
            },
            {
                idmenu:3,
                idkategori:2,
                menu:"Nasi Padang",
                gambar:"nasipadang.png",
                harga:20000,
            },
            {
                idmenu:4,
                idkategori:2,
                menu:"Nasi Ayam",
                gambar:"nasiayam.jpg",
                harga:15000,
            },
            {
                idmenu:5,
                idkategori:3,
                menu:"Es Teh",
                gambar:"esteh.png",
                harga:5000,
            },
            {
                idmenu:6,
                idkategori:3,
                menu:"Es Jeruk",
                gambar:"esjeruk.jpg",
                harga:7000,
            },
        ]
    )
    return (
      <div className="App">
        <Tabel menu = {menus} titel = {titel}/>
        <Tabel menu = {menus.filter((data)=>(data.idkategori===1))} titel = "MENU BUAH"/>
      </div>
    );
  }
  
  export default Menu;
  