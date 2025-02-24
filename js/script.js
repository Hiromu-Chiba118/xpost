barba.init({
  transitions: [
    {
      name: 'default-transition',
      // 現在のページを離れる時のフック
      leave() {
        return leave();
      },
      // 次のページを表示する時のフック
      enter() {
        return enter();
      },
    },
  ],
});

// leave
function leave() {
  return new Promise((resolve) => {
    $('.section').addClass('is-anime'); // クラスを追加
    setTimeout(function () {
      resolve(); // 800ms 後に Promise を解決
    }, 800);
  });
}

function enter() {
  return new Promise((resolve) => {
    $('.about').addClass('is-anime'); // クラスを追加
    setTimeout(function () {
      resolve(); // 800ms 後に Promise を解決
    }, 800);
  });
}