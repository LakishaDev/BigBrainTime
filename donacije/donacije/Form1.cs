﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace donacije
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
          
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            Form1 frm1 = new Form1();
           
            string email = textBox1.Text;
            string sifra = textBox2.Text;
            // ovde se proverava da li postoji email u bazi ako ima provarava da li je sifra tacna
            // ako jeste onda pali novu formu             
            Donacije donacija=new Donacije();
            donacija.Show();         
        }
    }
}