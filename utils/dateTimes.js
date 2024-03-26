export function formatDate(inputDate) {
    const currentDate = new Date();
    const inputDateObj = new Date(inputDate);

    const timeDifferenceInMilliseconds = currentDate - inputDateObj;
    const timeDifferenceInSeconds = timeDifferenceInMilliseconds / 1000;
    const timeDifferenceInMinutes = timeDifferenceInSeconds / 60;
    const timeDifferenceInHours = timeDifferenceInMinutes / 60;
    const timeDifferenceInDays = timeDifferenceInHours / 24;
    const timeDifferenceInWeeks = timeDifferenceInDays / 7;
    const timeDifferenceInMonths = timeDifferenceInDays / 30;
    const timeDifferenceInYears = timeDifferenceInDays / 365;

    if (timeDifferenceInYears >= 1) {
        const yearsAgo = Math.floor(timeDifferenceInYears);
        return `${yearsAgo} year${yearsAgo > 1 ? 's' : ''} ago`;
    } else if (timeDifferenceInMonths >= 1) {
        const monthsAgo = Math.floor(timeDifferenceInMonths);
        return `${monthsAgo} month${monthsAgo > 1 ? 's' : ''} ago`;
    } else if (timeDifferenceInWeeks >= 1) {
        const weeksAgo = Math.floor(timeDifferenceInWeeks);
        return `${weeksAgo} week${weeksAgo > 1 ? 's' : ''} ago`;
    } else if (timeDifferenceInDays >= 1) {
        const daysAgo = Math.floor(timeDifferenceInDays);
        return `${daysAgo} day${daysAgo > 1 ? 's' : ''} ago`;
    } else if (timeDifferenceInHours >= 1) {
        const hoursAgo = Math.floor(timeDifferenceInHours);
        return `${hoursAgo} hour${hoursAgo > 1 ? 's' : ''} ago`;
    } else if (timeDifferenceInMinutes >= 1) {
        const minutesAgo = Math.floor(timeDifferenceInMinutes);
        return `${minutesAgo} minute${minutesAgo > 1 ? 's' : ''} ago`;
    } else {
        return 'Now';
    }
}