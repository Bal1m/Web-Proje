new Vue({
  el: "#app",
  data: {
    form: {
      ad: "",
      soyad: "",
      email: "",
      telefon: "",
      cinsiyet: "",
      mesaj: ""
    },
    hata: ""
  },
  methods: {
    validateForm: function (event) {
      this.hata = "";

      if (
        !this.form.ad ||
        !this.form.soyad ||
        !this.form.email ||
        !this.form.telefon ||
        !this.form.cinsiyet ||
        !this.form.mesaj
      ) {
        this.hata = "Tüm alanları doldurmalısınız.";
        event.preventDefault();
        return;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(this.form.email)) {
        this.hata = "Geçerli bir e-posta giriniz.";
        event.preventDefault();
        return;
      }

      const telRegex = /^[0-9]{10,15}$/;
      if (!telRegex.test(this.form.telefon)) {
        this.hata = "Telefon sadece rakamlardan oluşmalı (10-15 haneli).";
        event.preventDefault();
        return;
      }
    }
  }
});
