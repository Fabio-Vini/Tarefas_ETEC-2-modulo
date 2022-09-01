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
    public partial class frmCliente : Form
    {
        public void Habilita()
        {
            cd_clienteTextBox1.Enabled = false;
            nm_clienteTextBox1.Enabled = true;
            ds_enderecoTextBox1.Enabled = true;
            nm_bairroTextBox.Enabled = true;
            nm_cidadeTextBox.Enabled = true;
            sg_estadoTextBox.Enabled = true;
            cd_cepTextBox.Enabled = true;
            cd_cpfTextBox.Enabled = true;
            cd_rgTextBox.Enabled = true;
            btnSalvar.Enabled = true;
            btnCancelar.Enabled = false;
            btnAnterior.Enabled = false;
            btnProximo.Enabled = false;
            btnNovo.Enabled = false;
            btnAlterar.Enabled = false;
            btnExcluir.Enabled = false;
            btnPesquisar.Enabled = false;
            btnImprimir.Enabled = false;
            btnSair.Enabled = false;
        }

        public void Desabilita()
        {
            cd_clienteTextBox1.Enabled = false;
            nm_clienteTextBox1.Enabled = false;
            ds_enderecoTextBox1.Enabled = false;
            nm_bairroTextBox.Enabled = false;
            nm_cidadeTextBox.Enabled = false;
            sg_estadoTextBox.Enabled = false;
            cd_cepTextBox.Enabled = false;
            cd_cpfTextBox.Enabled = false;
            cd_rgTextBox.Enabled = false;
            btnSalvar.Enabled = false;
            btnCancelar.Enabled = true;
            btnAnterior.Enabled = true;
            btnProximo.Enabled = true;
            btnNovo.Enabled = true;
            btnAlterar.Enabled = true;
            btnExcluir.Enabled = true;
            btnPesquisar.Enabled = true;
            btnImprimir.Enabled = true;
            btnSair.Enabled = true;
        }
        public frmCliente()
        {
            InitializeComponent();
        }

        private void tbClienteBindingNavigatorSaveItem_Click(object sender, EventArgs e)
        {
          
        }

        private void frmCliente_Load(object sender, EventArgs e)
        {
            // TODO: esta linha de código carrega dados na tabela 'bdCadastroDataSet.tbCliente'. Você pode movê-la ou removê-la conforme necessário.
            this.tbClienteTableAdapter.Fill(this.bdCadastroDataSet.tbCliente);
            Desabilita();
        }

        private void btnAnterior_Click(object sender, EventArgs e)
        {
            tbClienteBindingSource.MovePrevious();
        }

        private void btnProximo_Click(object sender, EventArgs e)
        {
            tbClienteBindingSource.MoveNext();
        }

        private void btnNovo_Click(object sender, EventArgs e)
        {
            tbClienteBindingSource.AddNew();
            Habilita();
        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            if (tbClienteBindingSource.Count > 0) { 
            tbClienteBindingSource.RemoveCurrent();
            tbClienteTableAdapter.Update(bdCadastroDataSet.tbCliente);
            }
        }

        private void btnSalvar_Click(object sender, EventArgs e)
        {
            tbClienteBindingSource.EndEdit();
            Validate();
            tbClienteTableAdapter.Update(bdCadastroDataSet.tbCliente);
            Desabilita();
        }

        private void btnCancelar_Click(object sender, EventArgs e)
        {
            tbClienteBindingSource.CancelEdit();
            Desabilita();
        }

        private void btnSair_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void btnAlterar_Click(object sender, EventArgs e)
        {
            if (tbClienteBindingSource.Count > 0) { 
            Habilita();
            }
        }
    }
}
