function sleep (time) {
    return new Promise((resolve) => setTimeout(resolve, time));
  }
  
  // Usage!
  sleep(3800).then(() => {
    document.location='index.html';
  });