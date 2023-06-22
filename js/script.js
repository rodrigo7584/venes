const swiperMaisVendidos = new Swiper('.swiper-mais-vendidos .swiper', {
  direction: 'horizontal',
  slidesPerView: 1,
  spaceBetween: 20,
  loop: false,
  navigation: {
    nextEl: '.swiper-mais-vendidos .swiper-button-next',
    prevEl: '.swiper-mais-vendidos .swiper-button-prev'
  },
  breakpoints: {
    1200: {
      slidesPerView: 4
    },
    992: {
      slidesPerView: 3
    },
    576: {
      slidesPerView: 2
    }
  }
})

const swiperPrintsComentarios = new Swiper('.swiper-prints-comentarios .swiper', {
  direction: 'horizontal',
  slidesPerView: 1,
  spaceBetween: 20,
  loop: false,
  navigation: false,
  pagination: {
    el: '.swiper-prints-comentarios .swiper-pagination',
    clickable: true,
    type: 'bullets'
  },
  breakpoints: {
    1200: {
      slidesPerView: 3
    },
    992: {
      slidesPerView: 2
    }
  }
})

const swiperDetalhesCursosPrints = new Swiper(
  '.swiper-detalhes-cursos-prints-comentarios .swiper',
  {
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 20,
    loop: false,
    navigation: false,
    pagination: {
      el: '.swiper-detalhes-cursos-prints-comentarios .swiper-pagination',
      clickable: true,
      type: 'bullets'
    },
    breakpoints: {
      768: {
        slidesPerView: 2
      }
    }
  }
)

function initMostrarSenha() {
  const boxInputsSenha = document.querySelectorAll('.input-senha')
  if (boxInputsSenha.length) {
    boxInputsSenha.forEach(box => {
      const inputSenha = box.querySelector('input')
      const btMostrarSenha = box.querySelector('.bt-mostrar-senha')
      btMostrarSenha.addEventListener('click', () => {
        if (inputSenha.type === 'password') {
          inputSenha.type = 'text'
        } else {
          inputSenha.type = 'password'
        }
      })
    })
  }
}
initMostrarSenha()

/*MODAL DIALOG */
function initModalDialog() {
  const modalButtons = document.querySelectorAll('[data-button-modal]')

  if (modalButtons.length) {
    modalButtons.forEach(button => {
      const modal = document.querySelector(`[data-dialog-modal="${button.dataset.buttonModal}"]`)

      button.addEventListener('click', () => {
        modal.classList.add('fade-in')
        modal.showModal()
      })

      function fadeOut() {
        modal.classList.add('fade-out')
        setTimeout(() => {
          modal.close()
          modal.classList.remove('fade-out')
        }, 1000 * 0.3)
      }

      const buttonsClose = modal.querySelectorAll('[data-dialog-modal="modal-close"]')
      buttonsClose.forEach(buttonClose => {
        buttonClose.addEventListener('click', () => {
          fadeOut()
        })
      })

      modal.addEventListener('click', e => {
        const modalDimensions = modal.getBoundingClientRect()
        if (
          e.clientX < modalDimensions.left ||
          e.clientX > modalDimensions.right ||
          e.clientY < modalDimensions.top ||
          e.clientY > modalDimensions.bottom
        ) {
          fadeOut()
        }
      })
    })
  }
}
initModalDialog()

/*END MODAL DIALOG */

function initMenuPagamento() {
  const botoesMetodosPagamento = document.querySelectorAll('[data-botao-pagamento]')
  const metodosPagamento = document.querySelectorAll('[data-metodo-pagamento]')
  if (botoesMetodosPagamento.length) {
    botoesMetodosPagamento[0].classList.add('ativo')
    document
      .querySelector(
        `[data-metodo-pagamento="${botoesMetodosPagamento[0].dataset.botaoPagamento}"]`
      )
      .classList.add('ativo')
    botoesMetodosPagamento.forEach(botao => {
      botao.addEventListener('click', () => {
        botoesMetodosPagamento.forEach(item => {
          item.classList.remove('ativo')
        })
        metodosPagamento.forEach(item => {
          item.classList.remove('ativo')
        })
        document
          .querySelector(`[data-metodo-pagamento="${botao.dataset.botaoPagamento}"]`)
          .classList.add('ativo')
        botao.classList.add('ativo')
      })
    })
  }
}
initMenuPagamento()

document.addEventListener('DOMContentLoaded', () => {
  function initAcompanheProgresso() {
    const botaoAcompanheProgresso = document.querySelector('.curso .bt-progresso')
    if (botaoAcompanheProgresso) {
      const containerProgresso = document.querySelector('.curso .container-progresso')
      const tamanhoContainer = `${containerProgresso.scrollHeight}px`

      botaoAcompanheProgresso.addEventListener('click', () => {
        botaoAcompanheProgresso.classList.toggle('ativo')

        if (containerProgresso.classList.contains('ativo')) {
          containerProgresso.classList.remove('ativo')
          containerProgresso.style.height = '0'
        } else {
          containerProgresso.classList.add('ativo')
          containerProgresso.style.height = tamanhoContainer
        }
      })
    }
  }
  initAcompanheProgresso()
})

function initMenuCurso() {
  const botoesMenuCurso = document.querySelectorAll('[data-botao-menu-curso]')
  const conteudosCurso = document.querySelectorAll('[data-conteudos-curso]')
  if (botoesMenuCurso.length) {
    botoesMenuCurso[0].classList.add('ativo')
    document
      .querySelector(`[data-conteudos-curso="${botoesMenuCurso[0].dataset.botaoMenuCurso}"]`)
      .classList.add('ativo')
    botoesMenuCurso.forEach(botao => {
      botao.addEventListener('click', () => {
        botoesMenuCurso.forEach(item => {
          item.classList.remove('ativo')
        })
        conteudosCurso.forEach(item => {
          item.classList.remove('ativo')
        })
        document
          .querySelector(`[data-conteudos-curso="${botao.dataset.botaoMenuCurso}"]`)
          .classList.add('ativo')
        botao.classList.add('ativo')
      })
    })
  }
}
initMenuCurso()

document.addEventListener('DOMContentLoaded', () => {
  function initVideoaulas() {
    const modulos = document.querySelectorAll('.curso .conteudo-videoaulas .modulo')
    if (modulos.length) {
      modulos.forEach(modulo => {
        const botao = modulo.querySelector('.modulo-head')
        const containerVideoaula = modulo.querySelector('.container-modulo-conteudo')
        const tamanhoContainer = `${containerVideoaula.scrollHeight + 20}px`

        botao.addEventListener('click', () => {
          botao.classList.toggle('ativo')
          containerVideoaula.style.padding = '0'
          if (containerVideoaula.classList.contains('ativo')) {
            containerVideoaula.classList.remove('ativo')
            containerVideoaula.style.height = '0'
            containerVideoaula.style.padding = '0'
          } else {
            containerVideoaula.classList.add('ativo')
            containerVideoaula.style.height = tamanhoContainer
            containerVideoaula.style.padding = '1rem'
          }
        })
      })
    }
  }
  initVideoaulas()
})

document.addEventListener('DOMContentLoaded', () => {
  function initDashboardPagamentos() {
    const dashboardPagamentos = document.querySelectorAll('.dashboard-pagamentos .pagamento')

    if (dashboardPagamentos.length) {
      dashboardPagamentos.forEach(pagamento => {
        const botao = pagamento.querySelector('.bt-abrir')
        const conteudoPagamento = pagamento.querySelector('.conteudo-pagamento')
        const tamanhoContainer = `${conteudoPagamento.scrollHeight}px`
        console.log(pagamento, tamanhoContainer)
        botao.addEventListener('click', () => {
          botao.classList.toggle('ativo')

          if (conteudoPagamento.classList.contains('ativo')) {
            conteudoPagamento.classList.remove('ativo')
            conteudoPagamento.style.height = '0'
          } else {
            conteudoPagamento.classList.add('ativo')
            conteudoPagamento.style.height = tamanhoContainer
          }
        })
      })
    }
  }
  initDashboardPagamentos()
})
