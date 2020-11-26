function Player() {
    this.x = 0;
    this.y = (canvas.height - this.height)/2;
    this.width = 10;
    this.height = 100;
    this.speed = 10
    this.score = 0;

    this.draw = function() {
        rect(this.x, this.y, this.width, this.height, "#86c06c");
    }

    this.update = function(direction) {
        switch(direction) {
            case 'UP':
                this.x -= this.speed;
                break;
            case 'DOWN':
                this.x += this.speed;
                break;
        }
    }

    this.center = function() {
        this.y = (canvas.height - this.height)/2;
    }
}