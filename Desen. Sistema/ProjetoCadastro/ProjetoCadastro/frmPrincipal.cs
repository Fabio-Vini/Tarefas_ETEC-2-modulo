using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ProjetoCadastro
{
    public partial class frmPrincipal : Form
    {
        public frmPrincipal()
        {
            InitializeComponent();
        }

        private void tbUsuarioBindingNavigatorSaveItem_Click(object sender, EventArgs e)
        {
            
        }

        private void frmPrincipal_Load(object sender, EventArgs e)
        {
           
        }

        private void cadastroToolStripMenuItem_Click(object sender, EventArgs e)
        {
            
        }

        private void sairToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void usuáriosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmUsuario fu = new frmUsuario();
            fu.ShowDialog();
        }

        private void clientesToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmCliente fu = new frmCliente();
            fu.ShowDialog();
        }

        private void fornecedoresToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmFornecedores fu = new frmFornecedores();
            fu.ShowDialog();
        }

        private void produtosToolStripMenuItem_Click(object sender, EventArgs e)
        {
            frmProdutos fu = new frmProdutos();
            fu.ShowDialog();
        }
    }
}
