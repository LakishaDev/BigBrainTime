using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using MySql.Data.MySqlClient;
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
            //SqlConnection connection = new SqlConnection(@"SERVER=120-00\SQLEXPRESS;DATABASE=AAA;initial catalog=Donacije;Integrated Security = true");
            string connectionString = @"Server=192.168.1.100;uid=baza1;pwd=123456;database=bbt";
            string sql = "SELECT * FROM Donacije WHERE PrimaocDonacije='Primaoc1'";
            MySqlConnection connection = new MySqlConnection(connectionString);
            MySqlDataAdapter dataadapter = new MySqlDataAdapter(sql, connection);
            DataSet ds = new DataSet();
            connection.Open();
            MessageBox.Show("ajaja");
            dataadapter.Fill(ds, "Donacije");
            connection.Close();
            dataGridView1.DataSource = ds;
            dataGridView1.DataMember = "Donacije";
        }

        private void Donacije_FormClosing(object sender, FormClosingEventArgs e)
        {
            Application.Exit();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            double[] iznos = new double[5];
            double ukupno = 0;
            List<string> davaoci = new List<string>();
            listBox1.Items.Clear();
            for (int i = 0; i < dataGridView1.RowCount - 1; i++)
            {
                listBox1.Items.Add(dataGridView1.Rows[i].Cells[3].Value);
                //iznos[i] = dataGridView1.Rows[i].Cells[4].Value.ToString();
            }
            for (int i = 0; i < listBox1.Items.Count; i++)
            {
                ukupno += Convert.ToDouble(listBox1.Items[i]);
            }
            label2.Text += Convert.ToString(ukupno);



            for (int i = 0; i < dataGridView1.RowCount - 2; i++)
            {
                davaoci.Add(dataGridView1.Rows[i].Cells[2].Value.ToString());
            }
            double max = 0;
            for(int i=0;i<davaoci.Count();i++)
            {
                string maxS = dataGridView1.Rows[i].Cells[3].Value.ToString();
                if (Convert.ToInt32(maxS)>max)
                {
                    max = Convert.ToInt32(maxS);
                }
            }
            label3.Text = "Najveca donacija : " + max;
            
        }
    }
}