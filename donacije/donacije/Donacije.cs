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
            string connectionString = @"datasource=192.168.1.103;database=bbt;username=baza1;password=123456";
            string sql = "SELECT * FROM primaoci";
            MySqlConnection connection = new MySqlConnection(connectionString);
            MySqlDataAdapter dataadapter = new MySqlDataAdapter(sql, connection);
            DataSet ds = new DataSet();
            connection.Open();
            dataadapter.Fill(ds, "primaoci");
            connection.Close();
            dataGridView1.DataSource = ds;
            dataGridView1.DataMember = "primaoci";
            dataGridView1.Columns[0].Visible = false;
            dataGridView1.Columns[1].Visible = false;
            dataGridView1.Columns[2].Visible = false;
            dataGridView1.Columns[5].Visible = false;
            dataGridView1.Columns[6].Visible = false;
            dataGridView1.Columns[8].Visible = false;

            double ukupno = 0;

            listBox1.Items.Clear();
            for (int i = 0; i < dataGridView1.RowCount; i++)
            {
                ukupno += Convert.ToDouble(dataGridView1.Rows[i].Cells[7].Value);
            }
            label2.Text = "Ukupno donirano : " + ukupno;
            double max = 0;
            for (int i = 0; i < dataGridView1.RowCount; i++)
            {
                if (Convert.ToDouble(dataGridView1.Rows[i].Cells[7].Value) > max)
                {
                    max = Convert.ToDouble(dataGridView1.Rows[i].Cells[7].Value);
                }
            }
            label3.Text = "Najveca donacija : " + max;
        }

        private void Donacije_FormClosing(object sender, FormClosingEventArgs e)
        {
            Application.Exit();
        }
    }
}