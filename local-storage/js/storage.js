const criaStorage = () => {

  const dadosDoVideo = {
    "titulo": "Armazenando dados com localStorage em JS",
    "duracao": "00:25:12",
    "descricao": "Aprendar a usar o localStorage do JavaScript"
  };

  window.localStorage.setItem('video', JSON.stringify(dadosDoVideo));
};

const getStorage = () => {
  const dadosDoVideo = window.localStorage.getItem('video');

  if (dadosDoVideo) {
    const objDadosDoVideo = JSON.parse(dadosDoVideo);
    const { titulo, duracao, descricao } = objDadosDoVideo;

    const resumo = titulo + '<br>' + duracao + '<br>' + descricao;

    document.getElementById('conteudo').innerHTML = resumo;
  }
};

const removeStorage = () => {
  window.localStorage.removeItem('video');
};

const clearStorage = () => {
  window.localStorage.clear();
};

//== métodos ==
// setItem [OK]
// getItem [OK]
// removeItem [OK]
// clear [OK]
// EXTRA
// Utilize os JSON.stringfy e JSON.parse para poder armazenar dados mais complexos no storage!


document.getElementById('cria-storage').onclick = criaStorage;
document.getElementById('remove-storage').onclick = removeStorage;
document.getElementById('limpa-storage').onclick = removeStorage;



getStorage();
