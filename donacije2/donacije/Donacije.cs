using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace donacije
{
    public partial class Donacije : Form
    {
        public Donacije()
        {

            
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void Donacije_Load(object sender, EventArgs e)
        {
            double ukupno = 0;
            double najvise = 0;
            string connectionString;
            SqlConnection cnn;
            connectionString = @"Data Source=WIN-50GP30FGO75;Initial Catalog=Demodb;Integrated Security=True";
            cnn = new SqlConnection(connectionString);
            cnn.Open();
            MessageBox.Show("Connection Open  !");
            cnn.Close();      
        }

        private void Donacije_Load_1(object sender, EventArgs e)
        {

        }
    }
}
