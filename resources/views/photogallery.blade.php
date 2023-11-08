<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweta's Photo Gallery </title>
 
  
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#wrapper {
  height: 100vh;
  overflow-x: hidden;
  overflow-y: auto;
}

.container {
  height: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.container h1 {
  margin: 20px 100px;
  text-align: center;
  margin-bottom: 20px;
  font-size: 3rem;
}

.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}


.card {
  width: 32%;
  position: relative;
  margin-bottom: 20px;
  border-radius: 10px;
  overflow: hidden;
}

.card img {

  width: 100%;
  height: 100%;
  filter: grayscale(100%);
  box-shadow: 0 0 20px #333;
  object-fit: cover;
}

.card:hover {
  transform: scale(1.03);
  transition: 0.5s;
  filter: drop-shadow(0 0 10px #333);
}


.card:hover img {
  filter: grayscale(0%);
}

.card figcaption {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 25px;
  width: 100%;
  height: 20%;
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  opacity: 0;
  border-radius: 0 0 10px 10px;
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
  transition: 0.3s;
}

.card:hover figcaption {
  opacity: 1;
  transform: scale(1.03);
}
    </style>
</head>

<body>
  <div id="wrapper">

    <div class="container">
      <h1>Sweta's  Photo Gallery</h1>  

      <div class="gallery">

        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/yHml46l7e6vBUPoNY382FYL5Fc0aC7U771lAphV7RYWGA9d6G-AgEf_lwv2d1KYLhXtTb5OrQGn5ulzeJFqWfwoxyRE2IbOcSklVuHjZ5Lxpy0bidQbbWfbXMhpxMCqanX9uh4otuDrOzLiibc-pySNkdXmIz-cUp3RAWQbEda-lqnkIDhM0tb4sAbt9SnZ80GPZTcB8lgBFXK73f8e2TjFA74eXseLJPW8S0t_L38_1MnW2dLoA7O3gQ7AJd-GWNTs_w03aHMENDjjqTrVYPNCAXBrel-gfqmNwRZl7mPQ0IqgFBcoHdac4p9a8iVEW4ktHeDHzlo7InlOEZ694XQVN2eBO3VuSquOhxg9a4pSQQlT2BuFCnn2cMdS6_Zr42AAzHW_Xz2mNYkcfOFbks2DURMZ0KzYfPPrkKGnvF5znCLzcPu1P9FNoSTpzzvkBtRTlmsis9xVU5mYJwECfJ6YuP_sdW0ZsGS2PxKOsuEmhJXu-FzjecA7pwGNifc_Y9j3ItpYCZHRpFcNgCz0SNh9qYPMH8cNOqeCTAoGeSMD0DdxORUzMqZwh4SQ62kWm1Aiy7gsQD6QiLSWdgmFQvbTGcFIATb0E6KTPcWmFJMYesBgJANlu_NI-xtw-LpZdo1lBFJGjgkwrNDL4v-Vb_wkFOhlI-1ptyX4RonRjUYkt0IhnLLP6TYWWTCDL_vmXWRfkmJ_5fWwZAnUmd3ZX1rrgijeGKJYsUgogtt5UnsDHnrGY2iOOMqisu-n62R2-gO-qje37I7ga8fwC219NoPhn-kYNa_nf8b7QCOWXf1rYa-blq61Yz5dJG5mTdz3zWc314C9LKwFG9oXHASlVmWHYK9pMt_nSVJo62TCb6pYrl5AIFk49JQxFP5dDX3wH3UHkGY8iGov2nz74FMX2kSHvaRIp_lcHddxDsailsX3PMaNDVtSxr7Ni_maLW_CK9YkStCgkjKogPtTA66WBQWhU_fuC-9skPXhLL2P3OtrbEFPZTeJP6cIg8RGTdZ42F6dVdass3vfX6EhvM8neOnvGVDJwx5ARbd8WtIagnRuDy3RAsx2nc0y96_9jaw=w670-h893-no?authuser=3"
            alt="">
          <figcaption>Manali</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/qVscXIYQIlcYixWYo8VSTDodrgdonkgYjWs1vWlfcvENmn_jEQ4_JiEoIewP1TGLTBs4ktE9fV5kN4nKpvo90rscdizHoqyHn_s5bmvcNcHP9Scq9rwacE-X40Tp_tOyHD9Q-WtVcqQyYrnefcNn3eN5blBdyOhZxqP1naEU9uRVOQ1u6IPNMKFajAL39wqlZAStQaRD6ZPbX7CA-MdLSLMbtyzlbzfd-CpDQELQrT0419hp0MHdVu589JMGfLl9NNn5rsVap4pfuZMp9gxE8E_wH_yTZaN6KePL91buMKUgamEOauSh6k31EoApPlEzK51zHm45vuxoEYzZGdZzi6DUFQjKBrL4vXp57Tr0Rc7WW2MoyGrXkBi_wnEgWEboVwjO0xKTKkFics48ihG4MDoB4xAwFz88G26boRYc0uiasTkarWk4NX606CBoGV6IHO1ohGnV954ScNhflO1LLB58qS5JMwRUdbEFKuRyVzxKmuhTj97Z9ACDXVH0zDfaqfBxWRzZkMed9ASu8dQmfVs0ARAskU98hmQskR2vzgtFkBslbACiAZYPQeeBe6lpm8pHKO42y8SoH1kpkIIrocfBa-i7q0lgRLwXk2XPsFvAbvu3CxhAJUOCImuZm5NaA9TyRFTF25TuuRZiSvQlfdDasKdf7JZTl_gSRsr-pjmjQQ3FrajQaPaHybwSwg4YyEUyfpfrE7_3BPOUdPdoGfrWJmTTBVcYfYEb2LER0SBY7nlx2kUIX2y060cG2ZjhVtBZf64fQb406fSbhybqfXSkBdZb1QbN9T0leGksQpHiocophnRNfg6J0JGnlSXzGFYCCYXWcDX0R6U0Xpcpb3EYXAMMLmb7G0e7DHI6pQ2Anzm5Flc7ZD7rV8FC1o7qPBZBm1Bx3X3D8xkKGFQK6Xx6UATrkJZB3wzZGMmX3-2kfbKdsxNpWlzaU2ntGct4FW4cMVZZiyNfUADc4ZAnO4FOh2I2qslCv5uTOsfwzAb5by4HBs3lUlBuSCMNnoxw910pJOatpKkJVqazAeJJnhELOppjULHtr8yyuDO7Du_gftLLCleIPUBNcPtyZg=w403-h893-no?authuser=3"
            alt="">
          <figcaption>LPU</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/f6ZFOLoTeToHi1CwJGzVdyq5DEGYGmCuNnzf3E-ZDsLHLR8_3p6SSiUtJ9qwky_hlanSt37D42YL-Wob10dYEGPP6RZlqX5QoyPWG_CxjN6kY7dn_76Cz2bOrZLF-wVwQIJOo14aVKjiLYbUL5ZnNoxsArzDCdiStkWLju2mFLVRAOEhZLZs_4A7nqYWu9-ufelHix1yCoCeDHe4C8X94mEJIs0RKWxNfwJ1UIzxRyzhKLTL-zSQdQAEPq6Z4-zUwnUqPmlqhALwH0yeeXR8kq1zkxbFWqxpad15AHwkwbcW7oE9SrLQVGm-5mDdxJi9VL_yLlvVeMe-TV0VF5eKPj_nIeWB-EBdZB4jrxryI-0_FpVQFARlF498e52w5aoEPKYJfYpBsMOC6fkTtgNiH9s8I0OIciUFv8OccZre2p6zXXB58VGah_be9Qbx-LGN1kw9k1uS-bmI-U_RK4fa_zwQmW2xpF4k7OG22-Pk1-bU7oHEoIjh0tap9p4kfRPJM6x_onVwqBK3JGrWXzJeoeIvtsdEEvmG0d9mZ_FyGhXaPrYLAV4hxuTN8nsvQtnEV1r1jwPl6r_NTO_KRDd6Rgzdp7gu73Q_JwOGfsmuncMbjlSHj5UNOCBhDUVSMOUfRzUmM5Hw9onsR6tB3VxlbqaV7fVowetpq1rkPk4fGo7Jdvmv3grua03MF0vD7HzIvAXYsxnoCdOxY6hJqeT3PfEDycNqaPBpbTJU7quef7Rgubv8P_TuUJqQZeBHkkanEo0yYj_o1H1DHfuEmf9V8JVm5OFzOzHQnOJYZMixIk7JTPa9xhRblxh4UhZ2cWAcVcw_nL4hQYxzsJ9BtywsvBOEx1BDjMdAzSAJp4v-WkLf0x2oDZS2AiBQMSzFfo5CgbiXpE7tKJAl0cStUsBWOMKlVMaU6iGcH32V_OjF4w9SR-Sgi5zSqY5MrLu8tgvGr8OE2LfWsb2JYbealUPPI6OHQ2mM5uZAuTWUpGzV5_IHfkEjB-3LAIQ6OteQOWst3EAND1a5h0qaXgHv7TSsN-EikiF2k1HGND-ut6xy5c7knEyNnMbOZNSyFzNzQA=w403-h893-no?authuser=3"
            alt="">
          <figcaption>Jalandhar</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/FnJD9MOFVSPg4hjsl3Mr4WjgZ3J2rd72f0NrQD8gTTakHQYfMtWknTbCfKMZrOtUFYwERPZIQtNOMRajdSVwVD0bumr8GY8B4iHNSkke7larxXbkQNu7_i0Ktgs1N7Yl7nugsEJSquo1MSxjGJb3WynOqq5kKlx_wZh3KDMeLrwH9uWda2S7KP9yeoSNH9nsk_NxyQRX6WWDfUKSyYoNUhI9ItXO-QU1ELjlKSpaKnizYugX3G-fs9wmgP0Dwe-ttr2rXnvQFuLuJf__C139zdrmwhz649PW7PeyHekYbYBpwTfpPRiQyfaACaXx3UDLFciGdzVoe7dWd-TEkQb2R_0QKI-RcILZ7Qu9amKBhAur9t-YAoeYfoTmYA7ex_ji7bXeMX_s4l6WgWRU5drKTmcavGEef-_ZRirIV6d6uCAEHo2p0K7EACNiu7brz_I8JcNZzaTqnjDJrv1DLMH_vpECC2kXgmA76whu8o1zxgiGkucXwV46IZSzqx9R55cVAu1YpXbR71I3YOR60o_EWDxznFouSGBL3mESouwnkbh_wTE2SaDw7WNA9Zjm-qeWeieaskEwYCR3Smg8p731yEpZaNtX3zePSvXjKeAdGnw_rpLA020eiKs9ps5xXwVZ0tdBO0hWBWQp3y9QyaDAycN5nzV2glgtbZKH_wWm7B2nAPGu6XXHpMTM4AFIsBxI_FMAnrg3APW3HjKEAGa_g5zL9zSwXMKreV89vCtMvuE7Lo2dTDXvL0O_J9T_fasXzx2uLxUTwlO8lLIkw-NWQV8S_JN-ngfSy5j58O_Ii5WRUOBtZKV_kGLQjOOOEl_tNIvTNcVtN52nNYUD_j3vCWWRAM_CLHBDdXt4XxxI9QXACWMHSN_pGdjh4wxP7LoXN7eioITb8aqm-Ji4eyiqv62dYCkUPohgwrH7ZAfx7NpR004t0kQJBGwOKVinrg-b8asgynu_B7JtHJOyl4tgP8Q31mS-ekgi7_rWFz4y_3wmqN0HvBLi6070l9MdGatYswcaWHQzPBeuo-XbZAKdVnShbLPWd9FI6p3NReJfiBZljK1fILL4xRT51OieDA=w670-h893-no?authuser=3"
            alt="">
          <figcaption>LPU</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/gLx4oDZ-Hf2cjZtlBSqsaitX3CSETOhcmoyaMxLY7QR4ywM1mB1Bls1bp9X9glcjnfDXFkbo6qumI3y_UXspDMV3H9FJhYSsEUPA-ptZ2QuEm9EFkzZTu3svjaAFShEmisIg4LfOmZyHrPjODoGSv-Ct_YnkccPaxe0iR_UO1qxQ5ywLwmOyCYWImAwl6h8KfH9spYntTX1A8a1K-HJaco99JxK_sZwm8NZBzYvCBquafljcAzJ2S7obBBoJY3QZgzRKgAbb4U90HKwjE-k_jT1y_nb1rJCIDUyCGsGBUsMdjfiaJQEZXtEbCC7SHKbP4fTjbipPDIJOjsZsbYdoaIgDcDcEGIhDLsZGKLf9h3ifcwB7BGI8fqLkkR-m8Va34t5vpyWN3NVoV-6iVj5BMjSFlLd21dLnZwx2Xcx26L_4WMer7LBgDVu5EmTUZNjpNXTy78DFetFmhqDUZHkQAhknaUKKpis7nxGjTymMmjg3lHAoPQAIYGHewqV1IJN3bDTF9vmFQTEOl6JUTBy0xWHj9rSX6Bqfpp-LVxWVeC2wTJhPsnOdnCogiN_2D0uZ5esyN3Fa19b2RhEAnFokS_DoLbmFJyqzFLpwu_77mYfWaFJJL0dOI42ipAzCtrRaDnn_r1iO4d0Y1x04VVHHltI5pjrMpHb5P8DdbJkbGsEqwMXoAhvDd0scAqOAwjDgvqihqeJMOfGkGhUZDBp86tiR6eaIbmj7hi-gxtqmK-3ZI8fsIZo-1yYQ5HTi3Gv-fiWyv09axI8XsrTER9mRgkz5xzRMMN86orbwNVXMXVz6aFrZasdgpKcbg04hoEgV4ZS_SQtUXmlHwPz9A2FI0XWqnDSyRHMoAnIuonDROnrXlCFY3BrP8ottSGCtyZbO8hxjLHK8Y1xeHKSbILXZR9U0tYwEAA7BjDstFctayeHz4UBGonw93faaCxCU-zxZo6iFmmwcNN7MC0-rgQnTz4Qazg6b6MRPKEfcD7subP7vJVmiw4sTJihRGwDS6N-YCfkLOkRXIrRnRKmjV_F9OQMgoa9IdigYnasQBXh7Tz4v-jNIRRA17aW3JoU5ag=w670-h893-no?authuser=3"
            alt="">
          <figcaption>Amritsar</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/Bx3Zv-4l7eoOEgHTaUxkgHg9XPYO8C917cflQ4uuPzsQJHkfHWxA9PmzG1BkZmXnnMiJlTZWWk1rPfnbVjSROXgwXw_CIToS23aA9qL7LnasVguW4mJhYBAup3r3RXMpB9jYNJNiVe4lkzTTISHYjvn9UP6r43XLDUZJEQUP4_-DmHP2QYHKsA7UnfNgn1VvRGuWeGdWzVd3ieHFUAhwY5ddgQQdanJixmhZV2EeEp4wO5hh0vV3GROWLQfrQExLMNjxWpWaHfqyp8LckypRn4uwU1p8nDLTwMqVO2KOFiYPSF87xHNZIgCGkQEjI4UmJeGldD6AmZYC16MRiWCDQ40hAQ-XF4EkOhUwzcf2KJsZQCs6C3FIgCqs6VwJTqPc6iwY6Dqe-DVUHMk6aDrEHC2qozk5ifmmYRZtAhrXPACwUtxkTx4IBHqwaPJ9wYhGagch21aaeV32GjhLYQZFgh8wswWIhyPqOxosYqMNYMDBWH6Yw9NV5_TUNdSqHiKwYq3pC5nDfoIygiw1zvUFmfC4gLwxL3bcwCXH2QUrhIHyyvv-dY35psqxl0dffRCQOP9CunVYWhmMqOK-cx1pWLFA6cG7zGadEx8_2ZABGQiBYa9fY5qH_z71qDl0Ryol6gylNMR1_9GerfT_YNY5IqMWPRb24NMYZgv2LG-GUlPiWtcM4wCCtHoca4YDIRfau9RCwsTAYzNw2S3MQML8dIKSuAtU5G3ArRADlUTg5oY2fRECIlsBWEuVX6DsEMtQcWSCID4iguZh2O1tmn7K6LqshJjRbXDbTRvVDhibTe_TRNWiosx_28matZpL0a9_V6GpScPxmJj0pcK7TcWiW0_t3JFDndr38h7Jb2Z9DODRJlO3dV7FaIqDtcwh7YqBXaf5YZunDKjFnaEzosQ0FnMZ6JIvzQbAX4pdXIf1wz_rlfeQQ2CC9JIog2CNj2OmJRrS82xSP3YX51HKcEy784R0FxIWtBmNhl0NwCA3OUnRxsJ6pCI-HNLi2qy-Ori1bKzRzuSsO4s4gajzmhhe8CCo_W3WwTEirVNsKSCV_Nv6pC72ZnJGHabyp0sUqw=w503-h893-no?authuser=3"
            alt="">
          <figcaption>GH-6 LPU </figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/k5MHmzybhLT2DZ36wOQBYrmj623Cjf6xPsB4TJwXowSU0HhGwQJN0h-9h_nPvmdz4GF-y9L4vq4PpcGSot0hU039GpMWF5G71hm0-rQcBWFJWtuT9bL5HSo5sjbhzaRq5laZ1HHPYAd76feoPUhcuidsUk2f-8CaT0UxoUlyXkabAkvTnLc5_L3X8ubV4trefHMh_L47-fkH1CGa3bOA5dnUyYqgfLVqRQmctfMll1GSXp3Vo3IKTUGppFofpipJUSh4yPeZ9JEcDvHeuJCZ1uINgA2ifOb2VTUuvKML9itdyAUiEJQEsngnuS1xbY3XMqwfs5H6yucspxk7caBxKziqpRVSN16z1qlVMa77UjmrMORk6nnKfsns0ujTobjQw2QathENijfEs8UDokSP_XzSl1I-2xPet2dlH-lVUc2DZ6VowPlAF7QDR0uvyjT-qmQ29_to8o5slJJ-dwaM7IoP4qtvmsT0ahvZ6O9BJerlfQTDSmG1WUO_Z8iOh8APTiknvi7ROybyUrQF-lXdP5tWAGF5IGUAsc3IE1E1f7pm4CByjmURF-PTYkTQ2GPY6ZlhYNlXfoxs_3C9XbJXyVOlupslZ3xX3Mn0MssCasTQHaYmpUBPt9cb1dLdWZi66k1WNyGOklAv6uHexh5tKlnEHsqlvSe0Csf0iCB3fmexdXlKSJMt_5xQNLgCX8p53oLVeKbSUjZFdE4Pga6yPefs3NsMS4XYEwfRvrqq7zUUUbalwLOw_W7R3GLkjeWF5beU2JN-yviASn1FqcPQhWHoCZus1ZyhUptts-aF7KAXw5TBiOm4uMEYbBJhA98yXu4_6K5NnbtAPSDP5q-BgE1g2NUfNyH1GiylA1EGv_kpFAIWaKnR6NGpqUDRWxSaKNnIIgBu3DRUr5U8ro0GniOvrkfxsu3SqWHFpP6Ce0IzsPCv6taWrKTwzLJaERqor6rS3W4kf3EVoxKJN8wLboVQQOb7_hqpfEjb7UAeMGT2CPpi6E3bLF_jVeyIvSNycl1N0gLQV8dgdyHuAMtI9PdMT33wCsx_0r09HrGvOrP_H49itpEtgMUI_pOsXA=w595-h893-no?authuser=3"
            alt="">
          <figcaption>Kota </figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/QfLksVv2IDnClZXe00PdX6BJxi3a00cJh9gbBgschBezuvZQzB9dW-jYRQ2TrtufnTutxX9Qt8ZQdjZ-m5fO3rAU5JqvoBi4ja3p2aFep6yHAb2Kast_srXvPJDmGDK0fDPPblY91qdiVatGkZN-668BCjynA4enVRI2x2G1_Hi_c1GoNvZmJTzgfAbCfvc5XvPzk56Xtizd-Ua0QHlyd6KPbAziPBD0QE2PlN-J8sJQZpUu6UlyHgKw2w5fE9Mw4TDUY2XAwzXVUu68_Dd9gWEF39VSvNSAZUb1d0EW-Cy11dBhkQLYlK4DqhXOyw5g2SksqHqrQlcFih6X98QyBERvJjDIkJzJb3jr4QABeVHIsbZPQTNkazKJZaQBB7JLE8rV6u0gASfRnFlHvmkKTGdtBRlipPxyVo2X1NCvbgaAvEnYPnuK3kjOBnhLTSUMVf47Uvye3EI9s5w1G6QH5GnSc_GTvjZzDdRazA_RPWJHEIRFIcMVJiJ1f1z3R0FGzoYI1yi3Pj9ecCSbqkgHuMp3i-xNwl3_EpClwKid-CVnzOVuvCsctfZSfKcdHLy9L7nLQNKuRFbIe3U4BC2sN8POy5s8Uc96LRtgFq6TLnroXzL5lbXBvLcP2QQ8-g0e7pkQ9qzulETMzyt_PzD09QnMDa-8Dk9pmo0ykedg372iC8H3P6uaFBFyihPVRfnu4PIHaS28-4ImjuJmn6knH9r7AhAp82ozbflTa-wFYzNxPly8A6ogoZAaYckbg7da_v3m7Zjst19V3pDz0om_BSplNFjBlI_EaVkbrbspQX6llUsn3ajOo3klgQDKxlvaOV7XW4_c5kI-Bs6Q-_6oDS6TV_2vtKaOgNAF0p_ANA8hkUO6_GUoMjkuR7o0aUZLn8dgIUjqEjqtf7av4AixAj1c59tdGRQ0c6R75uQBmGEIPkAvheCnrPfPkyuufyAcChJmwqxYxti-l3LZWCEAoiaEFLghtz8hQ5vUeQr-zbxlli1rLpTYa_V4ITBZO93nyC3wBCcv2lQzZN2QIEkZylK-OU8RE7X6XmisFpxILKRel--lI_8Z776OxRt6Qg=w503-h893-no?authuser=3"
            alt="">
          <figcaption>Tigert Club</figcaption>
        </figure>
        <figure class="card">
          <img
            src="https://lh3.googleusercontent.com/__D7hp-wUHrP_nfwKacdWuEEoBQqSCDbcFhfD0leYzvGTumgFXnZzkEe-cvtE0V9ye94OHOd2DjOFok6vRuJsZkT8RGwjbBdcx4N6i65F-qOKOXXcce0vbEGJ_QlUAu1O5k6vgK6hZp0RTHjTHxcbTnD_bJCpH3ImJNSpWXzbvl8OskiY1AYsQdHUSuHVsEJAOth4PkPd-FymjdtO0a-mZruTuh9cZyTrejXRe_zwRKXuCj1A-LDxS7aKURU8sLLLAXkB5YZxgmpZQ-pVdEbe-GAjqyUb3mpoD2_Ml66XM2OgJyRe5_DfOhoXuJ8OBEehjKVmvnoow8u1S5KgMIGiGmQdUoP9CShczsg3TjTsc1hVkiNeCTTRylgrgmIJsX1GZlwcqp8K4eqhxny4zigXjJEBsuHtvjC6WAB9Ed9eUaZ-u6OSXA6jB6Lna1EqoZsOzX4o46E0gcOhljZwQnR3tQrz4glDSqrPUzDq6JxPvOJ8UmqO-0NVuvhrHetj-DNCejTomf3shL9f5-5XfkrYRzFZxZRZL_dBi07J41jRQ10CBxNvv78nC6chbiJyRZisg3SyFirodgLKQWNWUoJnlizIe5VEtjXKsTXtViZ5_NzEb5oC-iDuV6RkydVrwKN9za5P6CxbprYL72TvpobpMaue1AYRGIg7nNEmJ5jo9aI8ksNxmLL-lfqBXBEkHrypNs0UJG-kbTN5gvQnC7DVXQ3701De1golgxWIVTtoK1SLNuUuVP2GZV2IPws4_NHrcSKGi3My2CYEdMRB0I5DQ0o-u5tABVtm0NdlkeibEQpH0inUGWqyeZhHQqE5ElioB9ahta57ffM1ORhUl4ALAv_tx-o9pqoD77buasgSFp2QSfHwloO4QU7Rmy7CA1jPVhFaDK_EdIrlt6oRZxoW-ZqB8e6wAxL3FTEq8R_ZpoABFh1W6txxSe2SZYk78w8DcB3aZOdiDyAs4fx-azWOV4qaeYPTh1l0y6l-Zu_ey-Juzlf8Nai4wHeQGUlrHSLTgRXMQsljE7rwMxSoHuDXCGV8YKoRl3g88U0diDmS1j3cR6CqgOn5_Tu2DW_bw=w670-h893-no?authuser=3"
            alt="">
          <figcaption>Manali</figcaption>
        </figure>
      </div>
    </div>


  </div>
</body>

</html>